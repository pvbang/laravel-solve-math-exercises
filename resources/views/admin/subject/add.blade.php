@extends('admin.app.index')

@section('admin_content')
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body p-0">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add Subject (Thêm môn học)</h1>
                </div>
                <br>
                <form class="user" action="/auth/login/admin/subject/add" method="POST">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="name_grade"
                            placeholder="Chọn lớp học" list="data" autocomplete="off">
                        <datalist id="data">
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->name_grade }}">
                            @endforeach
                        </datalist>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="name_subject"
                            placeholder="Tên môn học">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Thêm
                    </button>
                    
                </form>
                

            </div>
        </div>
    </div>
@endsection
