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

class AppController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('app.index')->with('route', 'index')
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons)
        ;
    }


    //
    public function grade($grade){

        if($grade == 'admin') {
            return Redirect('/auth/login/admin/index');
        }

        $dataGrade = DB::table('grades')->where('slug', $grade)->first();
        $dataSubjects = DB::table('subjects')->where('id_grade', $dataGrade->id_grade)->get();

        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('app.index')->with('route', 'grade')
        ->with('dataGrade', $dataGrade)
        ->with('dataSubjects', $dataSubjects)
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons)
        ;
    }

    //
    public function subject($grade, $subject){

        $dataGrade = DB::table('grades')->where('slug', $grade)->first();
        $dataSubject = DB::table('subjects')->where('id_grade', $dataGrade->id_grade)->where('slug', $subject)->first();

        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        $rightLessons = DB::table('lessons')->orderBy('updated_at', 'asc')->take(15)->get();

        $dataChapters = DB::table('chapters')->where('id_subject', $dataSubject->id_subject)->get();

        return view('app.index')->with('route', 'subject')
        ->with('dataGrade', $dataGrade)
        ->with('dataSubject', $dataSubject)
        ->with('rightLessons', $rightLessons)
        ->with('dataChapters', $dataChapters)
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons)
        ;
    }

    // lesson
    public function lesson($grade, $subject, $lesson){

        $dataGrade = DB::table('grades')->where('slug', $grade)->first();
        $dataSubject = DB::table('subjects')->where('id_grade', $dataGrade->id_grade)->where('slug', $subject)->first();
        $dataLesson = DB::table('lessons')->where('slug', $lesson)->first();

        $datachapters = DB::table('chapters')->where('id_subject', $dataSubject->id_subject)->get();
        $rightLessons = DB::table('lessons')->orderBy('updated_at', 'asc')->take(15)->get();

        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('app.index')->with('route', 'lesson')
        ->with('dataGrade', $dataGrade)
        ->with('dataSubject', $dataSubject)
        ->with('dataLesson', $dataLesson)
        ->with('datachapters', $datachapters)
        ->with('rightLessons', $rightLessons)
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons)
        ;
    }
}
