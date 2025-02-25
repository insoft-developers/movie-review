<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BE_HomeController extends Controller
{
    public function index() {
        $view = 'home';
        return view('backend.home', compact('view'));
    }
}
