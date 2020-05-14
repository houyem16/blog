<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function showAllusers(){
        return response()->json(users::all());

    }

    //
}
