@extends('admin.app.index')

@section('admin_content')
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body p-0">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Update Lesson (Sửa bài)</h1>
                </div>
                <br>
                <form class="user" action="/auth/login/admin/lesson/update" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $lesson->id_lesson }}" name="id">
                    <div class="form-group">
                        @foreach ($subjects as $subject)
                            @if ($dataChapter->id_subject == $subject->id_subject)
                                @foreach ($grades as $grade)
                                    @if ($subject->id_grade == $grade->id_grade)
                                        <input type="text" class="form-control form-control-user" name="name_chapter"
                                            placeholder="Chọn chương" list="data" autocomplete="off"
                                            value="{{ $grade->name_grade . ' - ' . $subject->name_subject . ' - ' . $dataChapter->name_chapter }}">
                                        @break
                                        @break
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        <datalist id="data">
                            @foreach ($chapters as $chapter)
                                @foreach ($subjects as $subject)
                                    @if ($chapter->id_subject == $subject->id_subject)
                                        @foreach ($grades as $grade)
                                            @if ($subject->id_grade == $grade->id_grade)
                                                <option
                                                    value="{{ $grade->name_grade . ' - ' . $subject->name_subject . ' - ' . $chapter->name_chapter }}">
                                                @break
                                                @break
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="{{ $lesson->name_lesson }}"
                            name="name_lesson" placeholder="Tên bài">
                    </div>

                    <span class="mb-4" style="margin: 10px;">Nội dung:</span>
                    
                    <textarea id="mytextarea" name="content">{{ $lesson->content }}</textarea>

                    <br>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="page" placeholder="Trang"
                            value="{{ $lesson->page }}">
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
