<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Người Dùng</title>
    @include('admin.header')
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href={{asset('admin/files\assets\icon\themify-icons\themify-icons.css')}}>
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href={{asset('admin/files\assets\icon\icofont\css\icofont.css')}}>
</head>
<body>
    <style>
     /* a:link {
    text-decoration: none;
    }    */
    </style>

    @include('admin.navbar')
    
    {{-- Trang hiển thị danh sách đơn xin điểm --}}

    <!-- Edit With Button card start -->
    <div class="card">
    <div class="card-header">
        {{-- <h5>Danh sách người dùng</h5> --}}
        {{-- <span>Click on buttons to perform actions</span> --}}
        <a href="{{route('admin.postponse_req.create')}}" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">Tạo đơn mới</a>


    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Đơn</th>
                        <th>Tiêu Đề</th>
                        <th>Trạng Thái</th>
                        <th>Học Kỳ</th>
                        <th class="tabledit-toolbar-column" style="text-align: center;">Công Cụ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                    <tr>
                        <th scope="row">{{ $u->id ?? "Trống"}}</th>
                        <th scope="row">{{ $u->tieu_de ?? "Trống"}}</th>
                        <th scope="row">{{ $u->trang_thai ?? "Trống"}}</th>
                        <th scope="row">#</th>
                        <th scope="row">#</th>
                        {{-- Các button --}}
                        <td style="white-space: nowrap; width: 1%;">
                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    {{-- <a href="{{route('admin.users.edit',[$u->id])}}" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></a> --}}
                                    <form action="{{ route('admin.users.edit', $u->id)}}" class="tabledit-edit-button btn btn primary waves-effect waves-light" style="float: none;margin: 5px;" method="get">
                                        @csrf
                                        @method('GET')
                                        <button class="btn btn-primary btn" type="submit"><span class="icofont icofont-ui-edit"></span></button>
                                    </form>
                                    <form action="{{ route('admin.users.destroy', $u->id)}}" class="tabledit-edit-button btn btn waves-effect waves-light" style="float: none;margin: 5px;" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn" type="submit"><span class="icofont icofont-ui-delete"></span></button>
                                    </form>
                                    <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                    <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                    <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>          
            </table>
        </div>
    </div>
    
</div>

  <!-- Edit With Button card end -->
  @include('admin.footer')
    <!-- Editable-table js -->
    {{-- <script type="text/javascript" src={{asset("admin/files\assets\pages/edit-table\jquery.tabledit.js")}}></script>
    <script type="text/javascript" src={{asset("admin/files\assets\pages/edit-table/editable.js")}}></script> --}}
    
    {{-- sweet alert Thông báo khi xóa bản ghi --}}
    <script>
        $('#submitForm').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: 'Bạn Có Chắc Muốn Xóa Bảng Ghi?',
                text: "Bạn Sẽ Không Thể Khôi Phục Một Khi Đã Xóa!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có',
                cancelButtonText: 'Không'
            }).then((result) => {
                if (result.value) {
    
                    form.submit();
                }
            });
        });
    </script>
    
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
</body>
</html>