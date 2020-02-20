<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalBlog extends Controller
{
   public function aboutMe()
   {
       return view('about');
   }

   public function samplePost()
   {
       return view('post');
   }

   public function contactUs()
   {
   	   return view('contact');
   }
}
