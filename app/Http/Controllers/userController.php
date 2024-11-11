<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('index');
    }
    public function loginpage()
    {
        return view('loginpage');
    }

    public function signup()
    {
        return view('signup');
    }

    public function home()
    {
        return view('home');
    }
    public function result()
    {
        return view('result');
    }
    public function calculate()
    {
        return view('calculate');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function profiles()
    {
        return view('profiles');
    }
    public function profilesedit()
    {
        return view('profilesedit');
    }
    public function guest_result()
    {
        return view('guest_result');
    }

    public function calculate_guest()
    {
        return view('calculate_guest');
    }

    public function admindashboard()
    {
        return view('admindashboard');
    }
    public function adminusers()
    {
        return view('adminusers');
    }
}
