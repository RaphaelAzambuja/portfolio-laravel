<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = $this->getServices();
        $faqs = $this->getFaqs();
        $projects = $this->getFeaturedProjects();
        $posts = $this->getLatestPosts();

        return view('pages.site.index', compact('services', 'faqs', 'projects', 'posts'));
    }

    private function getServices()
    {
        return Service::all();
    }

    private function getFaqs()
    {
        return Faq::all();
    }

    private function getFeaturedProjects()
    {
        return Project::where('featured', true)->get();
    }

    private function getLatestPosts()
    {
        return Post::select('title', 'excerpt', 'slug')->latest()->limit(4)->get();
    }
}
