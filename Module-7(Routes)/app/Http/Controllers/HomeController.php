<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.index',compact('navbars'));
        }    
        public function menu(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.menu',compact('navbars'));
        }    

        
        public function about(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.about',compact('navbars'));
        }    
        
        public function services(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.services',compact('navbars'));
        }    
        
        public function contact(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.contact',compact('navbars'));
        }    
        
        public function blog(Navbar $navbar)
        {
            $navbars = $navbar::all();
            return view('layouts.blog',compact('navbars'));
        }    
}
