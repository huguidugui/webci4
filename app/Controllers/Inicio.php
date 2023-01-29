<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        $data = [
            'locale' => $this->request->getLocale(),
            'supportedLocales' => $this->request->config->supportedLocales
        ];
        /* echo "<pre><br><br><br><br><br><br>";
        echo current_url();
        echo "</pre>";  */
        return view('headfooter/header')
                . view('headfooter/menu')
                . view('templates/inicio/slider')
                  . view('templates/main_start')
                    . view('templates/inicio/habilidades')
                    . view('templates/inicio/sobre_mi')
                  . view('templates/main_end')
               . view('headfooter/footer');
                /* 
                    
                        
                        
                        . view('templates/inicio/blog_inicio')
                     */
    }
}
