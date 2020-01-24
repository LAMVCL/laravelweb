<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function sobremi(){
        return view('aboutme');
    }
}
