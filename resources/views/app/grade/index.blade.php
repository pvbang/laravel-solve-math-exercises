<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="text-black">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dataGrade->name_grade }}</li>
    </ol>
</nav>

<div class="row">
    @foreach ($dataSubjects as $dataSubject)
        <div class="col-md-4">
            <div class="card border border-info shadow-0">
                <a href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}"
                    class="card-header text-center bg-info text-white">{{ $dataSubject->name_subject }}</a>

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
