<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarruselController extends Controller
{
    public function index()
    {
        $images = [
            asset('images/image1.jpg'),
            asset('images/image2.jpg'),
            asset('images/image3.jpg'),
        ];

        return view('carrusel', compact('images'));

        $path = $request->file('1.webp')->store('public/carrusel');

    }
}
