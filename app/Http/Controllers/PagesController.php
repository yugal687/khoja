<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to Ekhoja.';
        return view('pages.index', compact('title'));
   }

   public function about(){
       $title='About us.';
    return view('pages.about', compact('title'));

   }
   public function services(){
       $data = array(
     'title' => 'services',
    'services' => ['Post lost things here','Post found things here']
       );

       
    return view('pages.services') -> with($data);

   }

}
