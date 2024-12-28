<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $gallerys = Gallery::all();
        // Debugging: Check if categories are being fetched
        if ($kategoris->isEmpty()) {
            dd('No categories found.');
        }
        return view('home', compact('kategoris', 'gallerys'));

    }

}
