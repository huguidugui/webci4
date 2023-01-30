<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        $data = [
            'locale' => $this->request->getLocale(),
            'supportedLocales' => $this->request->config->supportedLocales
        ];
        
        return view('headfooter/header')
                . view('headfooter/menu')
                  . view('templates/main_start')
                    . view('templates/contacto/breadcrumb')
                    . view('templates/contacto/medios_contacto')
                  . view('templates/main_end')
               . view('headfooter/footer');
    }
}
