@extends('admin.app.index')

@section('admin_content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow-0">
            <h6 class="m-0 font-weight-bold text-primary">CHAPTER ( CHƯƠNG )</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle btn btn-primary" href="/auth/login/admin/chapter/add" role="button">
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
                            <th>Môn học</th>
                            <th>Chương</th>
                            <th>Thay đổi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Môn học</th>
                            <th>Chương</th>
                            <th>Thay đổi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($chapters as $chapter)
                            <tr>
                                <td>{{ $chapter->id_chapter }}</td>
                                <td>
                                    @foreach ($subjects as $subject)
                                        @if ($subject->id_subject == $chapter->id_subject)
                                            {{$subject->name_subject}}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $chapter->name_chapter }}</td>
                                <td>
                                    <a href="/auth/login/admin/chapter/update/id={{$chapter->id_chapter}}" type="button" class="btn btn-warning">Sửa</a>
                                    <a href="/auth/login/admin/chapter/delete/id={{$chapter->id_chapter}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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
