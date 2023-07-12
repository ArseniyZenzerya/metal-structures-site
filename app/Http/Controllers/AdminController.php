<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;


    class AdminController
    {
        public function login(Request $request)
        {
            if ($request->has('email-admin') and $request->has('password-admin')) {
            }
            return view('admin-login');
        }
    }
