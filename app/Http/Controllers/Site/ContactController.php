<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.site.contact.index');
    }
}
