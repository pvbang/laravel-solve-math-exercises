<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="text-black">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="/{{ $dataGrade->slug }}" class="text-black">{{ $dataGrade->name_grade }}</a></li>
        <li class="breadcrumb-item"><a href="/{{ $dataGrade->slug }}/{{ $dataSubject->slug }}"
                class="text-black">{{ $dataSubject->name_subject }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dataLesson->name_lesson }}</li>
    </ol>
</nav>

<div class="card border border-info shadow-0">
    <div class="card-header text-center text-uppercase text-info"><b>{{ $dataLesson->name_lesson }}</b></div>
    <div class="card-body">
        {!! $dataLesson->content !!}
    </div>
    <div class="card-footer text-muted text-center">Ngày cập nhật: {{ date('d/m/Y', strtotime($dataLesson->updated_at)) }}</div>
</div>
