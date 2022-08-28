<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="text-black">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dataGrade->name_grade }}</li>
    </ol>
</nav>

<div class="row">
    @foreach ($dataSubjects as $dataSubject)
        <div class="col-md-6">
            <div class="card border border-info shadow-0">
                <a href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}" class="card-header text-info text-uppercase" style="font-size: 18px;">
                    <img src="{{URL('img/graduation-hat.png')}}" width="30px" style="margin-right: 5px"/>
                    <b>{{ $dataSubject->name_subject }}</b>
                </a>

                <ul class="list-group list-group-light list-group-small">
                    @foreach ($chapters as $chapter)
                        @if ($chapter->id_subject == $dataSubject->id_subject)
                            <li class="list-group-item px-3"><a
                                    href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}#{{ $chapter->slug }}"
                                    class="text-black" style="font-size: 15px;">{{ $chapter->name_chapter }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <br>
        </div>
    @endforeach
</div>



<div class="card border border-info shadow-0"  style="margin-top: 15px">
    <div class="card-header text-info" style="font-size: 20px;">
        <img src="{{URL('img/heart.png')}}" width="23px" style="margin-right: 5px"/>
        <b>Có thể bạn quan tâm</b>
    </div>

    <div class="row">
        <div class="col-md-4">
            <ul class="list-group list-group-light list-group-small">
                @foreach ($rightLessons1 as $lesson)
                    @foreach ($chapters as $chapter)
                        @if ($lesson->id_chapter == $chapter->id_chapter)
                            @foreach ($subjects as $subject)
                                @if ($subject->id_subject == $chapter->id_subject)
                                    @foreach ($grades as $grade)
                                        @if ($grade->id_grade == $subject->id_grade)
                                            <li class="list-group-item px-3"><a
                                                    href="/{{ $grade->slug }}/{{ $subject->slug }}/{{ $lesson->slug }}"
                                                    class="text-black" style="font-size: 15px;">
                                                    <img src="{{URL('img/book.png')}}" width="20px" style="margin-right: 10px"/>
                                                    {{ $lesson->name_lesson }}
                                                </a>
                                            </li>
                                            @break
                                            @break
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group list-group-light list-group-small">
                @foreach ($rightLessons2 as $lesson)
                    @foreach ($chapters as $chapter)
                        @if ($lesson->id_chapter == $chapter->id_chapter)
                            @foreach ($subjects as $subject)
                                @if ($subject->id_subject == $chapter->id_subject)
                                    @foreach ($grades as $grade)
                                        @if ($grade->id_grade == $subject->id_grade)
                                            <li class="list-group-item px-3"><a
                                                    href="/{{ $grade->slug }}/{{ $subject->slug }}/{{ $lesson->slug }}"
                                                    class="text-black" style="font-size: 15px;">
                                                    <img src="{{URL('img/book.png')}}" width="20px" style="margin-right: 10px"/>
                                                    {{ $lesson->name_lesson }}
                                                </a>
                                            </li>
                                            @break
                                            @break
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group list-group-light list-group-small">
                @foreach ($rightLessons3 as $lesson)
                    @foreach ($chapters as $chapter)
                        @if ($lesson->id_chapter == $chapter->id_chapter)
                            @foreach ($subjects as $subject)
                                @if ($subject->id_subject == $chapter->id_subject)
                                    @foreach ($grades as $grade)
                                        @if ($grade->id_grade == $subject->id_grade)
                                            <li class="list-group-item px-3"><a
                                                    href="/{{ $grade->slug }}/{{ $subject->slug }}/{{ $lesson->slug }}"
                                                    class="text-black" style="font-size: 15px;">
                                                    <img src="{{URL('img/book.png')}}" width="20px" style="margin-right: 10px"/>
                                                    {{ $lesson->name_lesson }}
                                                </a>
                                            </li>
                                            @break
                                            @break
                                            @break
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>
    

<br>
</div>
<br>
