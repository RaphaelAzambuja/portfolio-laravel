<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('partners')
            ->latest()
            ->get();

        return view('pages.site.projects.index', compact('projects'));
    }
}
