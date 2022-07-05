<div class="card border border-info shadow-0">
    <div class="card-header text-center bg-info text-white">Bài giải mới nhất</div>

    <ul class="list-group list-group-light list-group-small">
        @foreach ($rightLessons as $lesson)
            @foreach ($chapters as $chapter)
                @if ($lesson->id_chapter == $chapter->id_chapter)
                    @foreach ($subjects as $subject)
                        @if ($subject->id_subject == $chapter->id_subject)
                            @foreach ($grades as $grade)
                                @if ($grade->id_grade == $subject->id_grade)
                                    <li class="list-group-item px-3"><a
                                            href="/{{ $grade->slug }}/{{ $subject->slug }}/{{ $lesson->slug }}"
                                            class="text-black" style="font-size: 15px;">{{ $lesson->name_lesson }}</a>
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
