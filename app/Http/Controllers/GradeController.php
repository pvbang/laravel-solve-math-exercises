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

class GradeController extends Controller
{
    //
    public function index() {
        $users = User::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        $chapters = Chapter::all();
        $lesssons = Lesson::all();

        return view('admin.grade.index')
        ->with('users', $users)
        ->with('grades', $grades)
        ->with('subjects', $subjects)
        ->with('chapters', $chapters)
        ->with('lesssons', $lesssons)
        ;
    }

    // add
    public function add() {
        return view('admin.grade.add');
    }
    public function addData(Request $request) {
        if ($request->input('name_grade') != null) {
            $data = Grade::create([
                'name_grade' => $request->input('name_grade'),
                'slug' => Str::slug($request->input('name_grade'))
            ]);
        }
        return Redirect('/auth/login/admin/grade');
    }

    // update
    public function update($id) {
        $data = Grade::find($id);
        return View('admin.grade.update')->with('grade', $data);
    }
    public function updateData(Request $request) {
        if ($request->name_grade != null) {
            $data = DB::table('grades')->where('id_grade', $request->id)
            ->update(['name_grade' => $request->name_grade, 'slug' => Str::slug($request->name_grade)]);
        }
        return Redirect('/auth/login/admin/grade');
    }

    // delete
    public function delete($id) {
        $data = Grade::find($id);
        $data->delete();
        return Redirect('/auth/login/admin/grade');
    }
}
