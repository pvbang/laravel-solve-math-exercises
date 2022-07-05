<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Lesson;

class LessonController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('admin.lesson.index')
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons);
    }

     // add
     public function add() {
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();

        return view('admin.lesson.add')
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lessons', $lessons);
    }
    public function addData(Request $request) {
        if ($request->input('name_chapter') != null && $request->input('name_lesson') != null) {
            $array = explode(" - ", $request->input('name_chapter'));
            
            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();
            $chapter = DB::table('chapters')->where('name_chapter', $array[2])->where('id_subject', $subject->id_subject)->first();

            $data = Lesson::create([
                'id_chapter' => $chapter->id_chapter,
                'name_lesson' => $request->input('name_lesson'),
                'content' => $request->input('content'),
                'page' => $request->input('page'),
                'slug' => Str::slug($request->input('name_lesson'))
            ]);
        }
        return Redirect('/auth/login/admin/lesson');
    }

    // update
    public function update($id) {
        $data = Lesson::find($id);
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $dataChapter = DB::table('chapters')->where('id_chapter', $data->id_chapter)->first();

        return View('admin.lesson.update')
        ->with('lesson', $data)
        ->with('dataChapter', $dataChapter)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('grades', $grades);
    }
    public function updateData(Request $request) {
        if ($request->name_lesson != null && $request->name_chapter != null) {
            $array = explode(" - ", $request->name_chapter);
            
            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();
            $chapter = DB::table('chapters')->where('name_chapter', $array[2])->where('id_subject', $subject->id_subject)->first();

            $data = DB::table('lessons')->where('id_lesson', $request->id)
            ->update([
                'id_chapter' => $chapter->id_chapter, 
                'name_lesson' => $request->name_lesson, 
                'content' => $request->content, 
                'page' => $request->page, 
                'slug' => Str::slug($request->name_lesson)
            ]);
        }
        return Redirect('/auth/login/admin/lesson');
    }

    // delete
    public function delete($id) {
        $data = Lesson::find($id);
        $data->delete();
        return Redirect('/auth/login/admin/lesson');
    }
}
