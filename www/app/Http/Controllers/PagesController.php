<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Bem vindo ao laravel!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = [
            'services' =>  [
                'Programação',
                'Cursos',
                'Consultoria'
            ],
        ];
        return view('pages.services')->with($data);
    }
}
