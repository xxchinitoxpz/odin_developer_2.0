<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectpage()
    {
        return view('project.projectpage');
    }
}
