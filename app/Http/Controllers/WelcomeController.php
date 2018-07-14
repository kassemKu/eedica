<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class WelcomeController extends Controller
{
    public function frontPage()
    {
        $courses = Course::latest()->publish()->paginate(10);
        return view('client.welcome', compact('courses'));
    }
}
