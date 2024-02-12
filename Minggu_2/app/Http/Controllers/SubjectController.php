<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function viewsubjectstuden()
    {
        return view('subjectstuden');
    }
    public function viewsubjectteacher()
    {
        return view('subjectteacher');
    }
    public function viewsubjectadmin()
    {
        return view('subjectadmin');
    }
}