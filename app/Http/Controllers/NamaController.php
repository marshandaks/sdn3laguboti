<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    // index
    public function index()
    {
        return view('welcome', [
            'visi' => Visi::orderBy('id', 'desc')->limit(3)->get(),
            'misi' => Misi::orderBy('id', 'desc')->limit(3)->get(),
            'fasilitas' => Fasilitas::orderBy('id', 'desc')->limit(3)->get(),
            'kegiatan' => Kegiatan::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }
}
