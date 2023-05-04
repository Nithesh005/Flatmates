<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('tenat_dashboard');
        // return view('owner_dashbord');
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function tenant_register()
    {
        return view('tenant_register');
    }
    public function terms_conditions()
    {
        return view('terms_conditions');
    }
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    public function owner_dashbord()
    {
        return view('owner_dashbord');
    }
    public function tenat_dashboard()
    {
        return view('tenat_dashboard');
    }
}
