<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Certification;

class PageController extends Controller
{
    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function careers(): View
    {
        return view('careers');
    }   

    public function certifications(): View
    {
        $certifications = Certification::all();
        return view('certifications', compact('certifications'));
    }
}
