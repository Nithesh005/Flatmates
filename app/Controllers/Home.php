<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    //     return view('tenat_dashboard');
    return view('home');
}
public function tenant_register()
{
return view('tenant_register');
}
}