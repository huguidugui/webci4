<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        /* $data = [
            'page_title' => 'Your title',
        ]; */
        
        return view('headfooter/header')
               . view('headfooter/footer');
    }
}
