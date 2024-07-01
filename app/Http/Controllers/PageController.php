<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function showWelcome(){
        return view('welcome');
    }
    Public function showHome(){
        return view('home');
    }
    Public function showUsers(){
        return view('user');
    }
    Public function showCreatepost(){
        return view('createpost');
    }
    Public function showBulpost(){
        return view('bulkpost');
    }
    Public function showLogin(){
        return view('login');
    }
}
