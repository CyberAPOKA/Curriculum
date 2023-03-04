<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CurriculumController extends Controller
{
    public function curriculum()
    {
        return Inertia::render('Curriculum');
    }
}
