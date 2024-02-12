<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function viewuserstuden()
    {
        return view('userstuden');
    }
    public function viewuserteacher()
    {
        return view('userteacher');
    }
    public function viewuseradmin()
    {
        return view('useradmin');
    }
}