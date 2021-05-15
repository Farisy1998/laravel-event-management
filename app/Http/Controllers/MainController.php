<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
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
        $register->state=$request->state;
        $register->district=$request->district;
        $register->city=$request->city;
        $register->email=$request->email;
        $register->phoneno=$request->phoneno;
        $register->username=$request->username;
        $register->password=Hash::make($request->password);
        $register->cpassword=Hash::make($request->cpassword);

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
            'username'=>'required',
            'password'=>'required|min:4|max:12'
        ]);

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
    function about()
    {
        return view('about');
    }
}
