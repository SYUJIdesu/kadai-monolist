<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
     public function index()
    {
        $items = Item::orderBy('updated_at', 'desc')->paginate(20);
        return view('welcome', [
            'items' => $items,
        ]);
    }

}
