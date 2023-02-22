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
                {{-- hiển thị ảnh đại diện  --}}
                {{-- <div class="form-group" style="margin-left: 43%; margin-right: 50%">
                    <div class="image-cropper">
                        <img src="/avatar_upload/{{$user->avatar}}" style="display: inline;margin: 0 auto;height: 100%;width: auto;" class="rounded" />
                    </div>
                </div> --}}
                {{-- <h6 style="margin-left: 44%">
                    <span style="font-size: 15px" class="badge bg-info">{{$user->position->positionName ?? ' '}}</span>
                    {{$user->name}}
                </h6><br> --}}
                <h4 class="sub-title">ĐIỀU CHỈNH THÔNG TIN TÀI KHOẢN</h4>
                <form action="{{route('admin.users.update', $user)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input hidden name="ma_nguoi_dung" value="{{Auth::user()->ma_nguoi_dung}}">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mã số</label>
                        <div class="col-sm-10">
                            {{-- @if($user->userCode == '')
                                <input required name="userCode" type="text" class="form-control" value="#" style="color: red; font-weight: bold" disabled>
                            @else
                                <input required name="userCode" type="text" class="form-control" value="#" style="color: red; font-weight: bold" disabled>
                            @endif --}}
                            <input required name="ma_nguoi_dung" type="text" class="form-control" value="{{$user->ma_nguoi_dung}}" style="font-weight: bold" disabled>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tên đăng nhập</label>
                        <div class="col-sm-10">
                            <input required name="name" type="text" class="form-control" value="{{$user->ten_dang_nhap}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Họ tên</label>
                        <div class="col-sm-10">
                            <input required name="name" type="text" class="form-control" value="{{$user->ho_ten}}">
                        </div>
                    </div>
{{-- 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Giới tính </label>
                        <div class="col-sm-10">
                            <select name="gender" class="form-control">
                                <option @if($user -> gender == 0) selected @endif value="0">Nam</option>
                                <option @if($user -> gender == 1) selected @endif value="1">Nữ</option>
                                <option @if($user -> gender == 2) selected @endif value="2">Khác</option>
                            </select>
                        </div>
                    </div> --}}
{{-- 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input name="address" type="text" class="form-control"value="{{$user->address}}">
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email tài khoản</label>
                        <div class="col-sm-10">
                            <input required name="email" type="text" class="form-control" value="{{$user->email}}" disabled>
                        </div>
                    </div>
{{-- 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mật khẩu</label>
                        <div class="col-sm-10">
                            <input required name="mat_khau" type="password" class="form-control" min="5" value="{{$user->email}} hidden">
                        </div>
                    </div> --}}
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


<script>
    $('#submit').click(function() {
    var data = $('#myForm').serializeArray();
    for(i in data){
        console.log(data[i]);
    }  
});
</script>

</body>
</html>