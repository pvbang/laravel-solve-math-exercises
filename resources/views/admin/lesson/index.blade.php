@extends('admin.app.index')

@section('admin_content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow-0">
            <h6 class="m-0 font-weight-bold text-primary">LESSON ( BÀI HỌC )</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle btn btn-primary" href="/auth/login/admin/lesson/add" role="button">
                    Thêm
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Chương</th>
                            <th>Bài</th>
                            <th>Nội dung</th>
                            <th>Thay đổi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Chương</th>
                            <th>Bài</th>
                            <th>Nội dung</th>
                            <th>Thay đổi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->id_lesson }}</td>
                                <td>
                                    @foreach ($chapters as $chapter)
                                        @if ($chapter->id_chapter == $lesson->id_chapter)
                                            {{ $chapter->name_chapter }}
                                            @break
                                        @endif
                                    @endforeach
                                    
                                </td>
                                <td>{{ $lesson->name_lesson }}</td>
                                <td>{!! $lesson->content !!}</td>
                                <td>
                                    <a href="/auth/login/admin/lesson/update/id={{$lesson->id_lesson}}" type="button" class="btn btn-warning">Sửa</a>
                                    <a href="/auth/login/admin/lesson/delete/id={{$lesson->id_lesson}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                        class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
