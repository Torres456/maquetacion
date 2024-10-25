<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarruselController extends Controller
{
    public function showCarrusel()
    {
        // Supongamos que tienes las imágenes en una carpeta específica o en la base de datos.
        $images = [
            'si.jpg',
            'ño.jpg',
            'xd.jpg'
        ];
    
        // Pasamos $images a la vista
        return view('carrusel', compact('images'));
    }
    }


