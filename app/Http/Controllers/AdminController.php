<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Lesson;

class AdminController extends Controller
{
    //
    public function index(){

        $grades = DB::table('grades')->count();
        $subjects = DB::table('subjects')->count();
        $chapters = DB::table('chapters')->count();
        $lessons = DB::table('lessons')->count();

        return view('admin.dashboard.index')
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons)
        ;
    }

    // template
    public function template($slug) {
        return view('admin.app.template.index')->with('route', 'template.'.$slug);
    }
}
