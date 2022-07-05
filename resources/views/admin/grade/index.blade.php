@extends('admin.app.index')

@section('admin_content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow-0">
            <h6 class="m-0 font-weight-bold text-primary">GRADE ( LỚP HỌC )</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle btn btn-primary" href="/auth/login/admin/grade/add" role="button">
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
                            <th>Slug</th>
                            <th>Thay đổi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Lớp</th>
                            <th>Slug</th>
                            <th>Thay đổi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($grades as $grade)
                            <tr>
                                <td>{{ $grade->id_grade }}</td>
                                <td>{{ $grade->name_grade }}</td>
                                <td>{{ $grade->slug }}</td>
                                <td>
                                    <a href="/auth/login/admin/grade/update/id={{$grade->id_grade}}" type="button" class="btn btn-warning">Sửa</a>
                                    <a href="/auth/login/admin/grade/delete/id={{$grade->id_grade}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
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
