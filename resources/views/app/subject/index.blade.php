<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="text-black">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="/{{ $dataGrade->slug }}" class="text-black">{{ $dataGrade->name_grade }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dataSubject->name_subject }}</li>
    </ol>
</nav>
@php
$count = 0;
@endphp
<div class="accordion" id="accordionPanelsStayOpenExample">
    @foreach ($dataChapters as $chapter)
        @if ($count == 0)
            <div class="accordion-item" id="{{ $chapter->slug }}">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-black fw-bolder text-uppercase" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#slug{{ $chapter->id_chapter }}" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        {{ $chapter->name_chapter }}
                    </button>
                </h2>
                <div id="slug{{ $chapter->id_chapter }}" class="accordion-collapse collapse show"
                    aria-labelledby="headingOne">
                    <div class="accordion-body">
                        @foreach ($lessons as $lesson)
                            @if ($lesson->id_chapter == $chapter->id_chapter)
                                <a href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}/{{ $lesson->slug }}"
                                    class="text-black" style="font-size: 15px;">{{ $lesson->name_lesson }}</a><br>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="accordion-item" id="{{ $chapter->slug }}">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-black fw-bolder text-uppercase" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#slug{{ $chapter->id_chapter }}" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        {{ $chapter->name_chapter }}
                    </button>
                </h2>
                <div id="slug{{ $chapter->id_chapter }}" class="accordion-collapse collapse"
                    aria-labelledby="headingOne">
                    <div class="accordion-body">
                        @foreach ($lessons as $lesson)
                            @if ($lesson->id_chapter == $chapter->id_chapter)
                                <a href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}/{{ $lesson->slug }}"
                                    class="text-black" style="font-size: 15px;">{{ $lesson->name_lesson }}</a><br>
                                
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @php
            $count = 1;
        @endphp
    @endforeach

</div>
