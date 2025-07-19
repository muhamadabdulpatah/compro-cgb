<?php

namespace App\Http\Controllers;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Http\Request;
use App\About;
use App\Service;
use App\Project;
use TCG\Voyager\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::select('deskripsi', 'visi', 'misi', 'judul')->first(), // Fetch the first record from the About model
            'website_settings' => Setting::all()->keyBy('key'),
            'services' => Service::get(),
            'projects' => Project::get(), // Assuming you want to use the same data for projects
            // You can add more data to pass to the view if needed
        ];
        // You can also pass the title directly to the view
        // return view('home', ['title' => $title]);
        return view('home', $data);
    }
}
