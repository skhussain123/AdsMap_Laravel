<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{


    function index()
    {
        return view('Client/index');
    }

    function insertpage()
    {
        return view('Client/insert');
    }


    function insertdata(Request $request) {}

    function mappage()
    {

        return View('Client/map');
    }

    function businessregpage()
    {

        return View('Client/b-register');
    }
}
