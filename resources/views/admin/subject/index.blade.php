@extends('admin.app.index')

@section('admin_content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow-0">
            <h6 class="m-0 font-weight-bold text-primary">SUBJECT ( MÔN HỌC )</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle btn btn-primary" href="/auth/login/admin/subject/add" role="button">
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
                            <th>Lớp</th>
                            <th>Môn học</th>
                            <th>Slug</th>
                            <th>Thay đổi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Lớp</th>
                            <th>Môn học</th>
                            <th>Slug</th>
                            <th>Thay đổi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject->id_subject }}</td>
                                <td>
                                    @foreach ($grades as $grade)
                                        @if ($grade->id_grade == $subject->id_grade)
                                            {{$grade->name_grade}}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $subject->name_subject }}</td>
                                <td>{{ $subject->slug }}</td>
                                <td>
                                    <a href="/auth/login/admin/subject/update/id={{$subject->id_subject}}" type="button" class="btn btn-warning">Sửa</a>
                                    <a href="/auth/login/admin/subject/delete/id={{$subject->id_subject}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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
