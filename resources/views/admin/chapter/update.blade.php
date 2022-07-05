@extends('admin.app.index')

@section('admin_content')
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body p-0">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update Chapter (Sửa Chương)</h1>
                </div>
                <br>
                <form class="user" action="/auth/login/admin/chapter/update" method="POST">
                    @csrf
                    <input type="hidden" value="{{$chapter->id_chapter}}" name="id">
                    <div class="form-group">
                        @foreach ($grades as $grade)
                            @if ($dataSubject->id_grade == $grade->id_grade)
                            <input type="text" class="form-control form-control-user" name="name_subject"
                            placeholder="Chọn môn học" list="data2" autocomplete="off" value="{{ $grade->name_grade.' - '.$dataSubject->name_subject }}">
                                @break
                            @endif
                        @endforeach
                        
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
                        <input type="text" class="form-control form-control-user" value="{{$chapter->name_chapter}}" name="name_chapter"
                            placeholder="Tên chương">
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
