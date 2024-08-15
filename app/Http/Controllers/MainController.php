<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\models\Offer;

use App\models\Blog;




class MainController extends Controller
{
    public function index()
    {   $offer = Offer::get();
        $blog = Blog::get();
        return view('index',compact('offer','blog'));
    }
    public function about()
    {
        return view('about');
    }
    public function coffees()
    {   $offer = Offer::get();
        return view('coffees',compact('offer'));
    }
    public function blog()
    {   $blog = Blog::get();
        return view('blog',compact('blog'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $data)
    {   
        $newUser=new User();
        $newUser->fullname=$data->input("fullname");
        dump($data->input("fullname"));
        $newUser->email=$data->input("email");
        $newUser->password=$data->input("password");
        $newUser->type="customer";
        if($newUser->save())
        {
            return redirect('login')->with('success','Congrulation! Your Account is Ready.');
        }
        return view('register');
    }
    public function loginUser(Request $data)
    {
        // dd($data->input('email')); // Debugging statement

        $user = User::where('email', $data->input('email'))->where('password', $data->input('password'))->first();
        if($user)
            {
                session()->put('id',$user->id);
                session()->put('type',$user->type);
                if($user->type=='customer')
                {
                    return redirect('/');
                }
                else if($user->type=='admin')
                {
                    return redirect('/admin1');
                }
    
            }else
            {
            return redirect('login')->with('error', 'Email/password is incorrect.');
            }
    }
    public function logout()
    {
        session()->forget('id');
        session()->forget('type');
        return redirect('/login');
    }
}
