<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(){
        return view('index');
    }

    function about(){
        return view('pages.about');
    }
    function skill(){
        return view('pages.skills');
    }

    function service(){
        return view('pages.services');
    }
    function project(){
        return view('pages.projects');
    }
    function contact(){
        return view('pages.contact');
    }
}
