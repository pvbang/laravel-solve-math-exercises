<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giải bài tập Toán Đại số, Hình học, Sách giáo khoa, Sách bài tập tất cả các lớp | ilyou</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

</head>

<body>

    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="/">GIẢI BÀI TẬP TOÁN</a>
            <form class="d-flex input-group w-auto">
                <div class="form-outline">
                    <input id="search-input" type="search" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Tìm kiếm</label>
                </div>
                <button id="search-button" type="button" class="btn btn-info shadow-0">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="btn-group shadow-0" role="group" aria-label="Basic example" style="margin-top:7px">
                <a type="button" href="/" class="btn btn-info rounded-0 shadow-0 border border-light">
                    <i class="fas fa-home text-white"></i>&ensp;Trang chủ
                </a>

                @foreach ($grades as $grade)
                    <div class="dropdown">
                        <a class="btn btn-info rounded-0 shadow-0 border border-light" id="dropdownMenuLink"
                            data-mdb-toggle="dropdown" href="/{{ $grade->slug }}">
                            {{ $grade->name_grade }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($chapters as $chapter)
                                @foreach ($subjects as $subject)
                                    @if ($chapter->id_subject == $subject->id_subject)
                                        @if ($subject->id_grade == $grade->id_grade)
                                            <li><a class="dropdown-item" href="/{{ $chapter->slug }}">{{ $chapter->name_chapter }}</a></li>
                                            @break
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>

        <br>

        @yield('content')
    </div>

    <br>
    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted border-top">
        <div style="background-color: rgba(0, 0, 0, 0.05);">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center">
                        <div class="text-start p-2 d-flex align-items-center">
                            <a href="mailto:pvbang23092002@gmail.com" class="text-black"><i
                                    class="fas fa-envelope"></i>&ensp;pvbang23092002@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div class="p-2 d-flex align-items-center">
                            <a href="tel:8496196652" class="text-black"><i class="fas fa-phone"></i>&ensp;096196652</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-end p-2">
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                                href="https://www.facebook.com/IT0902/" role="button"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                                href="https://github.com/ilyouu" role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

</body>

</html>
