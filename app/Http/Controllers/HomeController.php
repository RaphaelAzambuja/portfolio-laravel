<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = $this->getServices();
        $faqs = $this->getFaqs();
        return view('index', compact('services', 'faqs'));
    }

    private function getServices()
    {
        return Service::all();
    }

    private function getFaqs()
    {
        return Faq::all();
    }
}
