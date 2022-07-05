@extends('admin.app.index')

@section('admin_content')
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body p-0">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add Chapter (Thêm chương)</h1>
                </div>
                <br>
                <form class="user" action="/auth/login/admin/chapter/add" method="POST">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="name_subject"
                            placeholder="Chọn môn học" list="data2" autocomplete="off">
                        <datalist id="data2">
                            @foreach ($subjects as $subject)
                                @foreach ($grades as $grade)
                                    @if ($subject->id_grade == $grade->id_grade)
                                        <option value="{{ $grade->name_grade.' - '.$subject->name_subject }}">
                                        @break
                                    @endif
                                @endforeach
                                
                            @endforeach
                        </datalist>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="name_chapter"
                            placeholder="Tên chương" autocomplete="off">
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
