@extends('app.app.index')

@section('content')
    @switch($route)
        @case('index')
            @include('app.app.body')
        @break

        @case('grade')
            @include('app.grade.index')
        @break

        @case('subject')
            <div class="row">
                <div class="col-md-8">
                    @include('app.subject.index')
                </div>
                <div class="col-md-4">
                    @include('app.app.right')
                </div>
            </div>
        @break

        @case('lesson')
            <div class="row">
                <div class="col-md-8">
                    @include('app.lesson.index')
                </div>
                <div class="col-md-4">
                    @include('app.app.right')
                </div>
            </div>
        @break

        @default
            @include('app.app.body')
    @endswitch
@endsection
