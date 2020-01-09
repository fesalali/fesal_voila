<?php

namespace App\Http\Controllers;

use \DB;

class FrontController extends Controller
{
    public $lang;
    public function __construct()
    {
        // /\App::setLocale(session()->get('locale'));
    }

    public function index()
    {

        try {

            
            return view('welcome');
        } catch (\Throwable $th) {
            return view('errors.500');

        }

    }

    
    

}
