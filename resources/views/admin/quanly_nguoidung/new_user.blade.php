<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Cập Nhật Tài Khoản</title>
</head>
<body>
    @include("admin.header")
    <style>
        .image-cropper {
            width: 200px;
            height: 200px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }
        .card {
            margin: auto;
            width: 70%;
            border: 3px;
            padding: 10px;
            }
    </style>
    <div class="col-sm-12">
        <!-- Basic Form Inputs card start -->
        <div class="card">
            <div class="card-header">
                <div class="card-header-right">
                    <i class="icofont icofont-spinner-alt-5"></i>
                </div>
            </div>

            <div class="card-block">
                <h4 class="sub-title">NGƯỜI DÙNG MỚI</h4>
                <form action="{{route('admin.users.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input hidden name="ma_nguoi_dung" >
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mã số</label>
                        <div class="col-sm-10">
                            <input required name="ma_nguoi_dung" type="text" class="form-control" style="font-weight: bold">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tên đăng nhập</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="ten_dang_nhap">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Họ tên</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="ho_ten">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email tài khoản</label>
                        <div class="col-sm-10">
                            <input required name="email" type="text" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input required type="password" class="form-control" min="8" name="mat_khau">
                        </div>
                    </div>
{{-- 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input name="phone" type="number" class="form-control" value="{{$user->phone}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ngày tham gia</label>
                        <div class="col-sm-10">
                            <input name="dateJoin" type="date" class="form-control" value="{{$user->dateJoin}}">
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-info float-right btn-round">Cập nhật tài khoản</button>
                        <button type="button" class="btn btn-info float-right btn-round" value="Go back!" onclick="history.back()">Trở về</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include("admin.footer")


{{-- <script>
    $('#submit').click(function() {
    var data = $('#myForm').serializeArray();
    for(i in data){
        console.log(data[i]);
    }  
});
</script> --}}

</body>
</html>