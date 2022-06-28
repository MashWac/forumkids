<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Home/index');
    }
}
