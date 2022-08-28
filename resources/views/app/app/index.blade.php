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

    <style>
        #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 99;
          border: none;
          outline: none;
          cursor: pointer;
          border-radius: 100%;
          background-color: #16B5EA;
          padding: 5px
        }
        
        #myBtn:hover {
          background-color: #009ed3;
        }
    </style>
</head>

<body class="bg-light">
    <button onclick="topFunction()" id="myBtn" title="Cuộn lên trên"><img src="{{ URL('img/top.png') }}" height="30"></button>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="navbar-brand mb-0 h1 float-start" href="/"><img src="{{URL('img/logo.png')}}" width="270"/></a>
                        </div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-info float-end" style="margin-left: 15px">Đăng nhập</button>

                            <form class="d-flex input-group w-auto float-end">
                                <div class="form-outline bg-white">
                                    <input id="search-input" type="search" id="form1" class="form-control" />
                                    <label class="form-label" for="form1">Tìm kiếm</label>
                                </div>
                                <button id="search-button" type="button" class="btn btn-white border border-info shadow-0">
                                    <i class="fas fa-search fa-info" style="color: #39C0ED"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 5px">
                    <div class="row">
                        <div class="btn-group shadow-0" role="group" aria-label="Basic example"
                            style="margin-top:7px">
                            <a type="button" href="/"
                                class="btn btn-white rounded-0 shadow-0 border-bottom border-info border-2">
                                <i class="fas fa-home"></i>&ensp;Trang chủ
                            </a>
                            @foreach ($grades as $grade)
                                <div class="dropdown">
                                    <a class="btn btn-white rounded-0 shadow-0 border-info border-bottom border-2" id="dropdownMenuLink"
                                        data-mdb-toggle="dropdown" href="/{{ $grade->slug }}">
                                        {{ $grade->name_grade }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @foreach ($subjects as $subject)
                                            @if ($subject->id_grade == $grade->id_grade)
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="/{{ $grade->slug }}/{{ $subject->slug }}">{{ $subject->name_subject }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </nav>

    <div class="container" style="margin-top: 14px">
        @yield('content')
    </div>

    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted border-top">
        <div class="bg-white">

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

    <script>
        var mybutton = document.getElementById("myBtn");
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
