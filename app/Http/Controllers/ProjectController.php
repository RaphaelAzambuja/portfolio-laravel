<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('partners')
            ->latest()
            ->get();

        return view('pages.projects.index', compact('projects'));
    }
}
