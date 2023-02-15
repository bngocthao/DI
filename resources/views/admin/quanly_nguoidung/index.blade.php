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
    @include('admin.navbar')
    <!-- Edit With Button card start -->
    <div class="card">
    <div class="card-header">
        {{-- <h5>Danh sách người dùng</h5> --}}
        {{-- <span>Click on buttons to perform actions</span> --}}

    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Số</th>
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Vai Trò</th>
                        <th class="tabledit-toolbar-column">Công Cụ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                    <tr>
                        <th scope="row">{{ $u->id}}</th>
                        <th scope="row">{{ $u->ma_nguoi_dung}}</th>
                        <th scope="row">{{ $u->ho_ten}}</th>
                        <th scope="row">{{ $u->email}}</th>
                        <th scope="row">#</th>
                        <td style="white-space: nowrap; width: 1%;">
                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                <button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
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
      <script type="text/javascript" src={{asset("admin/files\assets\pages/edit-table\jquery.tabledit.js")}}></script>
      <script type="text/javascript" src={{asset("admin/files\assets\pages/edit-table/editable.js")}}></script>
</body>
</html>