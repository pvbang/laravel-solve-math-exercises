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

class SubjectController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lesssons = Lesson::all();

        return view('admin.subject.index')
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
        return view('admin.subject.add')->with('grades', $grades);
    }
    public function addData(Request $request) {
        if ($request->input('name_subject') != null && $request->input('name_grade') != null) {
            $grade = DB::table('grades')->where('name_grade', $request->input('name_grade'))->first();
            
            $data = Subject::create([
                'id_grade' => $grade->id_grade,
                'name_subject' => $request->input('name_subject'),
                'slug' => Str::slug($request->input('name_subject'))
            ]);
        }
        return Redirect('/auth/login/admin/subject');
    }

    // update
    public function update($id) {
        $data = Subject::find($id);
        $dataGrade = DB::table('grades')->where('id_grade', $data->id_grade)->first();
        $grades = Grade::All();

        return View('admin.subject.update')
        ->with('subject', $data)
        ->with('dataGrade', $dataGrade)
        ->with('grades', $grades);
    }
    public function updateData(Request $request) {
        if ($request->name_grade != null && $request->name_subject != null) {
            $grade = DB::table('grades')->where('name_grade', $request->input('name_grade'))->first();

            $data = DB::table('subjects')->where('id_subject', $request->id)
            ->update(['id_grade' => $grade->id_grade, 'name_subject' => $request->name_subject, 'slug' => Str::slug($request->name_subject)]);
        }
        return Redirect('/auth/login/admin/subject');
    }

    // delete
    public function delete($id) {
        $data = Subject::find($id);
        $data->delete();
        return Redirect('/auth/login/admin/subject');
    }
}
