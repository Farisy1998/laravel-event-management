<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use App\Models\RegisterModel;
use App\Models\PaymentModel;
use App\Models\BanquetBookingModel;
use App\Models\WeddingBanquetModel;
use App\Models\WeddingEventModel;
use App\Models\PartyVenueModel;
use App\Models\EnquireModel;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    function admin_reg()
    {
        return view('admin_reg');
    }
    function admin_save(Request $request)
    {
        if($request->password != $request->cpassword)
        {
            echo "Passwords isn't matches. Try again.";
        }
        else
        {
            $adminmodel=new AdminModel();
            $adminmodel->username=$request->username;
            $adminmodel->password=Hash::make($request->password);

            $adminmodel->save();

            echo "Admin registration successfull.";
        }
   }
    function dashboard()
    {
        return view('dashboard');
    }
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
    function save(Request $request)
    {
        $request->validate([
            'district'=>'required|not_in:0',
            'email'=>'required|email|unique:register_models',
            'username'=>'required|unique:register_models',
            'password'=>'required|min:4|max:15',
            'confirm_password'=>'required|min:4|max:15'
        ]);

        $check_password=$request->password;
        $check_cpassword=$request->confirm_password;


        if($check_password==$check_cpassword)
        {
            $register=new RegisterModel();
            $register->fname=$request->fname;
            $register->lname=$request->lname;
            $register->gender=$request->flexRadioDefault;
            $register->dob=$request->dob;
            $register->address=$request->address;
            $register->district=$request->district;
            $register->city=$request->city;
            $register->email=$request->email;
            $register->phoneno=$request->phoneno;
            $register->username=$request->username;
            $register->password=Hash::make($request->password);

            $register->save();

            return back()->with('success','Registration successfull. Please sign in.');
        }
        else
        {
            return back()->with('fail',"Passwords isn't matches.");
        }
    }
    function check(Request $request)
    {
        $request->validate([
            'acctype'=>'required',
            'username'=>'required',
            'password'=>'required|min:4|max:12'
        ]);

        $acctype=$request->acctype;
        if($acctype=="Admin")
        {
            $admininfo=AdminModel::where('username','=',$request->username)->first();
            if(!$admininfo)
            {
                return back()->with('fail','Invalid username.');
            }
            else
            {
                if(Hash::check($request->password, $admininfo->password))
                {
                    $request->session()->put('LoggedUser',$admininfo->id);
                    return redirect('/dashboard');
                }
                else
                {
                    return back()->with('fail','Invalid password.');
                }
            }
        }
        else if($acctype=="User")
        {
            $userinfo=RegisterModel::where('username','=',$request->username)->first();

            if(!$userinfo)
            {
                return back()->with('fail','Invalid username.');
            }
            else
            {
                if(Hash::check($request->password, $userinfo->password))
                {
                    $request->session()->put('LoggedUser',$userinfo->id);
                    return redirect('/userhome');
                }
                else
                {
                    return back()->with('fail','Invalid password.');
                }
            }
        }
        else
        {
            return back()->with('fail','Select an account type.');
        }
    }
    function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
    function home()
    {
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];
        return view('home', $data);
    }
    function venues()
    {
        return view('venues');
    }
    function profile()
    {
        $data=RegisterModel::where('id','=',session('LoggedUser'))->first();
        return view('profile', compact('data'));
    }
    function photoshoot()
    {
        return view('photoshoot');
    }
    function makeup()
    {
        return view('makeup');
    }
    function mehendi()
    {
        return view('mehendi');
    }
    function decorations()
    {
        return view('decorations');
    }
    function weddingbooking()
    {
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];
        return view('weddingbooking', $data);
    }
    function wedding_banquet_save(Request $request)
    {
        $request->validate([
            'banquet_type'=>'required|not_in:0',
            'banquet_style'=>'required|not_in:0',
            'part_no'=>'required'
        ]);

        $data=RegisterModel::where('id','=',session('LoggedUser'))->first();

        $weddingbanquetmodel= new WeddingBanquetModel();
        $weddingbanquetmodel->username=$data->username;
        $weddingbanquetmodel->banquet_type=$request->banquet_type;

        $banquet_type=$request->banquet_type;
        $amt_per_person=0;
        if($banquet_type=="Normal")
        {
            $amt_per_person=$amt_per_person+1000;
        }
        else if($banquet_type=="Standard")
        {
            $amt_per_person=$amt_per_person+2000;
        }
        else
        {
            $amt_per_person=$amt_per_person+3500;
        }

        $weddingbanquetmodel->amt_per_person=$amt_per_person;
        $weddingbanquetmodel->banquet_style=$request->banquet_style;
        $weddingbanquetmodel->part_no=$request->part_no;

        $save=$weddingbanquetmodel->save();

        if($save)
        {
            return view('wedding_event');
        }
        else
        {
            return back()->with('fail','Something went wrong. Try again later.');
        }
    }
    function wedding_event_save(Request $request)
    {
        $request->validate([
            'start_time'=>'required',
            'end_time'=>'required',
            'veg'=>'required|not_in:0',
            'non_veg'=>'required|not_in:0',
            'veg_imfl'=>'required|not_in:0',
            'non_veg_imfl'=>'required|not_in:0',
            'ex_liquor'=>'required|not_in:0',
            'ex_cool_drinks'=>'required|not_in:0',
            'audio_visual'=>'required|not_in:0',
            'live_casting'=>'required|not_in:0'
        ]);

        $data=RegisterModel::where('id','=',session('LoggedUser'))->first();
        $date=BanquetBookingModel::where('id','=',session('LoggedUser'))->first();
        $weddingeventmodel=new WeddingEventModel();
        $weddingeventmodel->username=$data->username;
        $weddingeventmodel->from_date=$date->from_date;
        $weddingeventmodel->start_time=$request->start_time;
        $weddingeventmodel->to_date=$date->to_date;
        $weddingeventmodel->end_time=$request->end_time;
        $weddingeventmodel->veg=$request->veg;
        $weddingeventmodel->non_veg=$request->non_veg;
        $weddingeventmodel->veg_imfl=$request->veg_imfl;
        $weddingeventmodel->non_veg_imfl=$request->non_veg_imfl;
        $weddingeventmodel->ex_liquor=$request->ex_liquor;
        $weddingeventmodel->ex_cool_drinks=$request->ex_cool_drinks;
        $weddingeventmodel->audio_visual=$request->audio_visual;
        $weddingeventmodel->live_casting=$request->live_casting;
        $weddingeventmodel->message=$request->message;

        $save=$weddingeventmodel->save();

        if($save)
        {
            return view('reg_payment');
        }
        else
        {
            return back()->with('fail','Something went wrong. Try again later.');
        }
    }
    function reg_payment_save(Request $request)
    {
        $r_data=RegisterModel::where('id','=',session('LoggedUser'))->first();
        $b_data=BanquetBookingModel::where('username','=',$r_data->username)->first();

        $status="Payed";
        $reg_fee_amt=250;
        $date=Carbon::now();
        $pay_date=$date->toDateString();
        $paymentmodel=new PaymentModel();
        $paymentmodel->username=$r_data->username;
        $paymentmodel->card_no=$request->card_no;
        $paymentmodel->book_type=$b_data->book_type;
        $paymentmodel->fee_type=$b_data->fee_type;
        $paymentmodel->reg_fee_amt=$reg_fee_amt;
        $paymentmodel->status=$status;
        $paymentmodel->pay_date=$pay_date;

        $save=$paymentmodel->save();

        if($save)
        {
            return view('payment_save');
        }
        else
        {
            return back()->with('fail','Something went wrong. Try again later.');
        }
    }
    function payment_save()
    {
        return view('payment_save');
    }
    function about()
    {
        return view('about');
    }
    function party_venue_save(Request $request)
    {
        $data=RegisterModel::where('id','=',session('LoggedUser'))->first();

        $partyvenuemodel=new PartyVenueModel();
        $partyvenuemodel->username=$data->username;
        $partyvenuemodel->venue_type=$request->venue_type;

        $venue_type=$request->venue_type;
        $amt_per_person=0;
        if($venue_type=="Normal")
        {
            $amt_per_person=$amt_per_person+800;
        }
        elseif($venue_type=="Standard")
        {
            $amt_per_person=$amt_per_person+1800;
        }
        else
        {
            $amt_per_person=$amt_per_person+3800;
        }

        $partyvenuemodel->amt_per_person=$amt_per_person;
        $partyvenuemodel->party_type=$request->party_type;
        $partyvenuemodel->venue_style=$request->venue_style;
        $partyvenuemodel->part_no=$request->part_no;

        $save=$partyvenuemodel->save();

        if($save)
        {
            return view('party_event');
        }
        else
        {
            return back()->with('fail','Something went wrong. Try again later.');
        }
    }
    function banquet_booking()
    {
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];

        return view('banquet_booking', $data);
    }
    function banquet_booking_save(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'book_type'=>'required|not_in:0',
            'from_date'=>'required|date|after:tomorrow',
            'to_date'=>'required|date|after:from_date'

        ]);

        $data=RegisterModel::where('id','=',session('LoggedUser'))->first();

        $fee_type="Registration / Booking fee";
        $date=Carbon::now();
        $book_date=$date->toDateString();
        $banquetbookingmodel=new BanquetBookingModel();
        $banquetbookingmodel->username=$data->username;
        $banquetbookingmodel->fname=$request->fname;
        $banquetbookingmodel->lname=$request->lname;
        $banquetbookingmodel->email=$request->email;
        $banquetbookingmodel->mob=$request->mob;
        $banquetbookingmodel->alt_mob=$request->alt_mob;
        $banquetbookingmodel->book_type=$request->book_type;
        $banquetbookingmodel->fee_type=$fee_type;
        $banquetbookingmodel->from_date=$request->from_date;
        $banquetbookingmodel->to_date=$request->to_date;
        $banquetbookingmodel->location=$request->location;
        $banquetbookingmodel->book_date=$book_date;

        $res_location=BanquetBookingModel::where('location','=', $request->location)->first();

            if($res_location==NULL)
            {
                if($request->book_type=="Wedding banquet")
                {
                    $banquetbookingmodel->save();
                    return view('wedding_banquet');
                }
                elseif($request->book_type=="Party venue")
                {
                    $banquetbookingmodel->save();
                    return view('party_venue');
                }
                elseif($request->book_type=="Corporate venue")
                {
                    $banquetbookingmodel->save();
                    return view('corporate_venue');
                }
                else
                {
                    return back()->with('fail','Please let us know, What you want to book.');
                }
            }
            else
            {
                $res=DB::table('banquet_booking_models')->get();

                $req_from_date=Carbon::createFromFormat('Y-m-d', $request->from_date);
                $req_to_date=Carbon::createFromFormat('Y-m-d', $request->to_date);

                foreach ($res as $row)
                {
                    $from_check = Carbon::createFromFormat('Y-m-d', $row->from_date)->between($req_from_date, $req_to_date);
                    $to_check = Carbon::createFromFormat('Y-m-d', $row->to_date)->between($req_from_date, $req_to_date);

                    if($from_check || $to_check)
                    {
                        return back()->with('fail','Banquet is already booked for or with in the selected dates or location.');
                    }
                    else
                    {
                        if($request->book_type=="Wedding banquet")
                        {
                            $banquetbookingmodel->save();
                            return view('wedding_banquet');
                        }
                        elseif($request->book_type=="Party venue")
                        {
                            $banquetbookingmodel->save();
                            return view('party_venue');
                        }
                        elseif($request->book_type=="Corporate venue")
                        {
                            $banquetbookingmodel->save();
                            return view('corporate_venue');
                        }
                        else
                        {
                            return back()->with('fail','Please let us know, What you want to book.');
                        }
                    }
                }
            }
    }
    /*function banquet_booking_save()
    {
        return view('wedding_banquet');
    }*/
    function contact()
    {
        return view('contact');
    }
    function enquire_save(Request $request)
    {
        $enquiremodel=new EnquireModel();
        $enquiremodel->name=$request->name;
        $enquiremodel->email=$request->email;
        $enquiremodel->phone_no=$request->phone_no;
        $enquiremodel->city=$request->city;
        $enquiremodel->message=$request->message;
        $date=Carbon::now();
        $request_date=$date->toDateString();
        $enquiremodel->request_date=$request_date;

        $save=$enquiremodel->save();

        if($save)
        {
            return back()->with('success','Your request hasbeen recived. Try checking your mail for our response.');
        }
        else
        {
            return back()->with('fail','Something weny wrong. Try again later.');
        }
    }
    function edit_profile($id)
    {
        $data=RegisterModel::find($id);
        return view("edit_profile",compact('data'));
    }
    function update_profile(Request $request, $id)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email',
            'phoneno'=>'required'
        ]);
        $data=RegisterModel::find($id);
        if(($request->username==$data->username)&&($request->email==$data->email)&&($request->phoneno==$data->phoneno))
        {
            return back()->with('fail','Nothing to save.');
        }
        else{
            $data->username=$request->username;
            $data->email=$request->email;
            $data->phoneno=$request->phoneno;

            $data->save();

            return back()->with('success','Successfully updated');
        }
    }
    function change_password($id)
    {
        $data=RegisterModel::find($id);
        return view("change_password",compact('data'));
    }
    function update_password(Request $request, $id)
    {
        $request->validate([
            'password'=>'required|min:4|max:15',
            'confirm_password'=>'required|min:4|max:15'
        ]);
        $data=RegisterModel::find($id);
        if($request->password!=$request->confirm_password)
        {
            return back()->with('fail',"Passwords isn't matches.");
        }
        else
        {
            $data->password=Hash::make($request->password);

            $data->save();

            return back()->with('success','Password successfully updated');
        }
    }
    function verify_email(Request $request)
    {
        return view('verify_email');
    }
    function emailcheck(Request $request)
    {
        $request->validate([
            'email'=>'required|email'
        ]);
        $data=RegisterModel::where('email','=',$request->email)->first();
        if(!$data)
        {
            return back()->with('fail','Email not found');
        }
        else
        {
            return view('change_mpassword', compact('data'));
        }
    }
    function update_mpassword(Request $request, $email)
    {
        $request->validate([
            'password'=>'required|min:4|max:15',
            'confirm_password'=>'required|min:4|max:15'
        ]);
        $data=RegisterModel::where('email','=',$email)->first();
        if($request->password!=$request->confirm_password)
        {
            return back()->with('fail',"Passwords isn't matches.");
        }
        else
        {
            $data->password=Hash::make($request->password);

            $data->save();

            return redirect('/');
        }
    }
    function search(Request $request)
    {
        if(($request->search_data=="Home")||($request->search_data=="home"))
        {
            return view('home');
        }
        elseif(($request->search_data=="Venues")||($request->search_data=="venues")||($request->search_data=="Banquets")||($request->search_data=="banquets"))
        {
            return view('venues');
        }
        elseif(($request->search_data=="Photoshoot")||($request->search_data=="photoshoot"))
        {
            return view('photoshoot');
        }
        elseif(($request->search_data=="Makeup")||($request->search_data=="makeup"))
        {
            return view('makeup');
        }
        elseif(($request->search_data=="Mehendi")||($request->search_data=="mehendi"))
        {
            return view('mehendi');
        }
        elseif(($request->search_data=="Decorations")||($request->search_data=="decorations"))
        {
            return view('decorations');
        }
        elseif(($request->search_data=="About")||($request->search_data=="about"))
        {
            return view('about');
        }
        elseif(($request->search_data=="My account")||($request->search_data=="my account")||($request->search_data=="Account")||($request->search_data=="account"))
        {
            $data=RegisterModel::where('id','=',session('LoggedUser'))->first();
            return view('profile', compact('data'));
        }
        elseif(($request->search_data=="Profile")||($request->search_data=="profile"))
        {
            $data=RegisterModel::where('id','=',session('LoggedUser'))->first();
            return view('profile', compact('data'));
        }
        elseif(($request->search_data=="Contact")||($request->search_data=="contact")||($request->search_data=="Enquire")||($request->search_data=="enquire")||($request->search_data=="Feedback")||($request->search_data=="feedback"))
        {
            return view('contact');
        }
        elseif(($request->search_data=="Booking")||($request->search_data=="booking")||($request->search_data=="Venue booking")||($request->search_data=="venue booking")||($request->search_data=="Banquet booking")||($request->search_data=="banquet booking"))
        {
            $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];

            return view('banquet_booking', $data);
        }
        elseif(($request->search_data=="My Bookings")||($request->search_data=="my bookings"))
        {
            $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];

            return view('mybooking', $data);
        }
        else
        {
            return view('404notfound');
        }
    }
    function myBooking()
    {
        return view('mybooking');
    }
}
