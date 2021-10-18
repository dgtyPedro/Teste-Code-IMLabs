<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        $session = session();
        $session->destroy();
        header('location: Login');
        exit;  
    }
}