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

class ChapterController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lesssons = Lesson::all();

        return view('admin.chapter.index')
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lesssons', $lesssons)
        ;
    }

    // add
    public function add() {
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('admin.chapter.add')
        ->with('grades', $grades)
        ->with('subjects', $subjects);
    }
    public function addData(Request $request) {
        if ($request->input('name_subject') != null && $request->input('name_chapter') != null) {
            $array = explode(" - ", $request->input('name_subject'));
            
            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();

            $data = Chapter::create([
                'id_subject' => $subject->id_subject,
                'name_chapter' => $request->input('name_chapter'),
                'slug' => Str::slug($request->input('name_chapter'))
            ]);
        }
        return Redirect('/auth/login/admin/chapter');
    }

    // update
    public function update($id) {
        $data = Chapter::find($id);
        $grades = Grade::all();
        $subjects = Subject::all();
        $dataSubject = DB::table('subjects')->where('id_subject', $data->id_subject)->first();

        return View('admin.chapter.update')
        ->with('chapter', $data)
        ->with('dataSubject', $dataSubject)
        ->with('subjects', $subjects)
        ->with('grades', $grades);
    }
    public function updateData(Request $request) {
        if ($request->name_subject != null && $request->name_chapter != null) {
            $array = explode(" - ", $request->name_subject);
            
            $grade = DB::table('grades')->where('name_grade', $array[0])->first();
            $subject = DB::table('subjects')->where('name_subject', $array[1])->where('id_grade', $grade->id_grade)->first();

            $data = DB::table('chapters')->where('id_chapter', $request->id)
            ->update(['id_subject' => $subject->id_subject, 'name_chapter' => $request->name_chapter, 'slug' => Str::slug($request->name_chapter)]);

        }
        return Redirect('/auth/login/admin/chapter');
    }

    // delete
    public function delete($id) {
        $data = Chapter::find($id);
        $data->delete();
        return Redirect('/auth/login/admin/chapter');
    }
}
