<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class HomeController extends Controller
{
    public function index()
    {
        // Set the title for the view
        $title = 'PT. Cahaya Guntur Berlian';
        $data = [
            'about' => About::select('deskripsi', 'visi', 'misi', 'judul')->first(), // Fetch the first record from the About model
            // You can add more data to pass to the view if needed
        ];
        view()->share('title', $title);
        // You can also pass the title directly to the view
        // return view('home', ['title' => $title]);
        return view('home', $data);
    }
}
