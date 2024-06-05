<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                "name"=> "John Doe",
                "age" => 30
            ],
            [
                "name"=> "Sean",
                "age" => 15
            ],
            [
                "name"=> "Filip",
                "age" => 16
            ]
        ];

        return view('dashboard',
            [
                "users" => $users
            ]);
    }
}
