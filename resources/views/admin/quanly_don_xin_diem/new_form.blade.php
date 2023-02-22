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
    <!-- CK editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
</head>
<body>
    <style>
     /* a:link {
    text-decoration: none;
    }    */
    </style>

    @include('admin.navbar')
    
    {{-- Trang hiển thị danh sách người dùng --}}



        <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="sub-title" >Đơn xin vắng</h4>
                        <form action="{{ route('admin.postponse_req.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên sinh viên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$user->ho_ten}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email sinh viên</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Học phần</label>
                                <div class="col-sm-10">
                                    <select name="select" class="form-control ">
                                        <option value="opt1">Select One Value Only</option>
                                        <option value="opt2">Type 2</option>
                                        <option value="opt3">Type 3</option>
                                        <option value="opt4">Type 4</option>
                                        <option value="opt5">Type 5</option>
                                        <option value="opt6">Type 6</option>
                                        <option value="opt7">Type 7</option>
                                        <option value="opt8">Type 8</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Học kỳ</label>
                                <div class="col-sm-10">
                                    <select name="select" class="form-control ">
                                        <option value="opt1">Học kỳ 1</option>
                                        <option value="opt2">Học kỳ 2</option>
                                        <option value="opt3">Học kỳ hè</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- Hiển thị khoảng số năm mà sv đang học -->
                                <label class="col-sm-2 col-form-label">Năm học</label>
                                <div class="col-sm-10">
                                    <select name="select" class="form-control ">
                                        <option value="opt1">Select One Value Only</option>
                                        <option value="opt2">Type 2</option>
                                    </select>
                                </div>
                            </div>
                            <!-- List ra danh sách tên các giảng viên, sv chọn, sau khi nộp đơn 1 thư sẽ đc tự -->
                            <!-- động gửi tới email của giảng viên -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tên giảng viên</label>
                                <div class="col-sm-10">
                                    <select name="ten_giang_vien" class="form-control ">
                                        <option value="opt1">Danh sách tên giảng viên</option>
                                        <option value="opt2">Type 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lý do vắng</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Giấy xác nhận</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info float-right btn-round">Tạo Đơn</button>
                            </div>
                        </form>
                            <!-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nhận xét</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nhận xét</label>
                                <div class="col-sm-10">
                                    <textarea id="editor" class="form-control"></textarea>
                                </div>
                            </div> -->
                        </form>
                <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tên giảng viên</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Basic Form Inputs card end -->
    </div>

    <!-- CK editor -->
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>

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