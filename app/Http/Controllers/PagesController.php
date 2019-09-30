<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index() {
       return view('pages.index');
   }

   public function company() {
        return view('pages.company');
    }

    public function employee() {
        return view('pages.employee');
    }
}
