<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        // dumb and die
        //dd($bukus);
        return view('page.buku', compact('bukus'));
    }
}