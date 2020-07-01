<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function register()
    {
        return view('form');
    }

    public function welcome(Request $request)
    {
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welcome', with(["fnama" => $fname, "lnama" => $lname]));
    }
}
