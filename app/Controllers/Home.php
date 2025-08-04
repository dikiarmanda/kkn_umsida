<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'text' => 'Hello World',
        ];
        return $this->template->display('dashboard', $data);
        // return view('welcome_message');
    }
}
