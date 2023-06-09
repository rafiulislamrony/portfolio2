<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;
use App\Models\Service;
use App\Models\About;
use App\Models\Portfolio;

class PagesController extends Controller
{
    //
    public function index(){

        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $abouts = About::all();
        return view('pages.index', compact('main', 'services', 'portfolios', 'abouts'));
    }

}
