<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('owner_dashbord');
    }
    public function tenat_dashboard()
    {
        return view('tenat_dashboard');
    }
}
