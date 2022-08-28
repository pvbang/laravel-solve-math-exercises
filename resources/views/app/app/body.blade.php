<div class="row">
    @foreach ($grades as $grade)
        <div class="col-md-4">
            <div class="card border border-info shadow-0">
                <a href="/{{ $grade->slug }}" class="card-header text-info" style="font-size: 20px;">
                    <img src="{{URL('img/student.png')}}" width="25px" style="margin-right: 5px"/>
                    <b>{{ $grade->name_grade }}</b>
                </a>
            
                <ul class="list-group list-group-light list-group-small">
                    @foreach ($subjects as $subject)
                        @if ($subject->id_grade == $grade->id_grade)
                            <li class="list-group-item px-3"><a href="/{{$grade->slug}}/{{$subject->slug}}" class="text-black" style="font-size: 15px;">{{ $subject->name_subject }}</a></li>
                        @endif
                    @endforeach
                  </ul>
            </div>
            <br>
        </div>
    @endforeach
</div>



<div class="card border border-info shadow-0" style="margin-top: 15px">
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