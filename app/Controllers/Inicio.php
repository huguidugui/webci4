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
                    . view('headfooter/menu')
                    . view('templates/inicio/slider')
                    . view('templates/main_start')
                        . view('templates/inicio/habilidades')
                        . view('templates/inicio/sobre_mi')
                        . view('templates/inicio/blog_inicio')
                    . view('templates/main_end')
                    . view('headfooter/footer');
    }
}
