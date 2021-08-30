<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return Inertia::render('Home', [
            'title' => $title
        ]);
    }

    public function about(){
        $name = 'Tentang Kami';
        return Inertia::render('About', [
            'name' => $name
        ]);
    }

    public function info(){
        return Inertia::render('Info');
    }
}
