<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudController extends Controller
{
    function contacts(){
        return view('contacts');
    }
    function addContact(){
        return view('addcontact');
    }
}
