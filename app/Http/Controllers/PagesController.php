<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(){

        $data = [];
        $data['first'] = 'Ashraful';
        $data['last'] = 'Karim';

        $pata = [];
        $pata['middle'] = 'Kuddus';
        $pata['surname'] = 'Boyati';

        $people = [
            'Fuad Bin Azad', 'Minhaz Hossain', 'Uthpal Saha', 'Tarek Ismail'
        ];

        return view('pages.about', compact('data', 'pata', 'people'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
