<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming'
        ];

        return view('user/index', $data);
    }
}
