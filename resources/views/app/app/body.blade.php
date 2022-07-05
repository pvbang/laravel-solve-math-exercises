<div class="row">
    @foreach ($grades as $grade)
        <div class="col-md-4">
            <div class="card border border-info shadow-0">
                <a href="/{{ $grade->slug }}" class="card-header text-center bg-info text-white">{{ $grade->name_grade }}</a>
            
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
