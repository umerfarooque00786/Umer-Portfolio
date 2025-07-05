<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get();
        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = Project::latest()->paginate(6);
        return view('projects', compact('projects'));
    }
}
