@extends('admin.app.index')

@section('admin_content')
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body p-0">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update Grade (Sửa lớp học)</h1>
                </div>
                <br>
                <form class="user" action="/auth/login/admin/grade/update" method="POST">
                    @csrf
                    <input type="hidden" value="{{$grade->id_grade}}" name="id">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="{{$grade->name_grade}}" name="name_grade"
                            placeholder="Tên Lớp">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning btn-user btn-block">
                        Sửa
                    </button>
                    
                </form>
                

            </div>
        </div>
    </div>
@endsection
