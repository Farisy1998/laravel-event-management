<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use App\Models\WeddingBookingModel;
use App\Models\WeddingEventModel;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function admin_reg()
    {
        return view('admin_reg');
    }
    function admin_save(Request $request)
    {
        $adminmodel=new AdminModel();
        $adminmodel->username=$request->username;
        $adminmodel->password=Hash::make($request->password);

        $adminmodel->save();
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
            'email'=>'required|email|unique:register_models',
            'username'=>'required|unique:register_models',
            'password'=>'required|min:4|max:5',
            'cpassword'=>'required|min:4|max:5'
        ]);

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

        $check_password=$request->password;
        $check_cpassword=$request->cpassword;

        $save=$register->save();

        if($check_password==$check_cpassword)
        {
            if($save)
            {
                return back()->with('success','Registration successfull');
            }
            else
            {
                return back()->with('fail','Something went wrong, try again later');
            }
        }
        else
        {
            return back()->with('fail',"Passwords isn't matches");
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
                return back()->with('fail','Invalid username');
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
                    return back()->with('fail','Invalid password');
                }
            }
        }
        else if($acctype=="User")
        {
            $userinfo=RegisterModel::where('username','=',$request->username)->first();

            if(!$userinfo)
            {
                return back()->with('fail','Invalid username');
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
                    return back()->with('fail','Invalid password');
                }
            }
        }
        else
        {
            return back()->with('fail','Select an account type');
        }
    }
    function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('/login');
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
        $data=['LoggedUserInfo'=>RegisterModel::where('id','=',session('LoggedUser'))->first()];
        return view('profile', $data);
    }
    function photography()
    {
        return view('photography');
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
    function weddingevent()
    {
        return view('weddingevent');
    }
    /*function weddingevent(Request $request)
    {

        $data=RegisterModel::where('email','=',$request->email)->first();

        $weddingbookingmodel= new WeddingBookingModel();
        $weddingbookingmodel->fname=$request->fname;
        $weddingbookingmodel->lname=$request->lname;
        $weddingbookingmodel->email=$request->email;
        $weddingbookingmodel->username=$data->username;
        $weddingbookingmodel->mob=$request->mob;
        $weddingbookingmodel->altmob=$request->altmob;
        $weddingbookingmodel->bfrom=$request->bfrom;
        $weddingbookingmodel->bto=$request->bto;
        $weddingbookingmodel->blocation=$request->blocation;
        $weddingbookingmodel->btype=$request->btype;

        $btype=$request->btype;
        $amt=0;
        if($btype=="Normal")
        {
            $amt=$amt+1000;
        }
        else if($btype=="Standard")
        {
            $amt=$amt+2000;
        }
        else
        {
            $amt=$amt+3500;
        }

        $weddingbookingmodel->amt=$amt;
        $weddingbookingmodel->veg=$request->veg;
        $weddingbookingmodel->non_veg=$request->non_veg;
        $weddingbookingmodel->veg_imfl=$request->veg_imfl;
        $weddingbookingmodel->non_veg_imfl=$request->non_veg_imfl;
        $weddingbookingmodel->ex_liquor=$request->ex_liquor;
        $weddingbookingmodel->ex_cooldrinks=$request->ex_cooldrinks;
        $weddingbookingmodel->audio_visual=$request->audio_visual;
        $weddingbookingmodel->live_cast=$request->live_cast;
        $weddingbookingmodel->message=$request->message;

        $save=$weddingbookingmodel->save();

        if($save)
        {
            return view('weddingevent',$data);
        }
        else
        {
            echo ' ! Something went wrong, try again later';
        }

    }
    function reg_payment(Request $request)
    {
        $data=WeddingBookingModel::where('id','=',session('LoggedUser'))->first();

        $weddingeventmodel=new WeddingEventModel();
        $weddingeventmodel->fname=$data->fname;
        $weddingeventmodel->lname=$data->lname;
        $weddingeventmodel->email=$data->email;
        $weddingeventmodel->username=$data->username;
        $weddingeventmodel->start_date=$request->start_date;
        $weddingeventmodel->start_time=$request->start_time;
        $weddingeventmodel->end_date=$request->end_date;
        $weddingeventmodel->end_time=$request->end_time;
        $weddingeventmodel->partno=$request->partno;
        $weddingeventmodel->message=$request->message;

        $save=$weddingeventmodel->save();

        if($save)
        {
            return view('reg_payment');
        }
        else
        {
            echo ' ! Something went wrong, try again later';
        }

    }*/
    function reg_payment()
    {
        return view('reg_payment');
    }
    function about()
    {
        return view('about');
    }
}
