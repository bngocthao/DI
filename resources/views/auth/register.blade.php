@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Đăng Ký') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="ho_ten" class="col-md-4 col-form-label text-md-end">{{ __('Họ tên') }}</label>

                            <div class="col-md-6">
                                <input id="ho_ten" name="ho_ten" type="text" class="form-control @error('ho_ten') is-invalid @enderror" ho_ten="ho_ten" value="{{ old('ho_ten') }}" required oninvalid="this.setCustomValidity('Tên phải được điền')"
                                 onchange="this.setCustomValidity('')" autocomplete="ho_ten" autofocus>
                                @error('ho_ten')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- check điều kiện email sv đăng ký phải là email trường --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Địa Chỉ Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('Email phải được điền')"
                                onchange="this.setCustomValidity('')" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ten_dang_nhap" class="col-md-4 col-form-label text-md-end">{{ __('Tên Đăng nhập') }}</label>

                            <div class="col-md-6">
                                <input id="ten_dang_nhap" name="ten_dang_nhap" type="text" class="form-control @error('ten_dang_nhap') is-invalid @enderror" ten_dang_nhap="ten_dang_nhap" value="{{ old('ten_dang_nhap') }}" required oninvalid="this.setCustomValidity('Tên đăng nhập phải được điền')"
                                onchange="this.setCustomValidity('')" autocomplete="ten_dang_nhap" autofocus>

                                @error('ten_dang_nhap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input name="ma_nguoi_dung" type="hidden" class="form-control" value="{{ Str::random(8) }}" >

                        <div class="row mb-3">
                            <label for="mat_khau" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="mat_khau" type="password" class="form-control @error('mat_khau') is-invalid @enderror" name="mat_khau" required oninvalid="this.setCustomValidity('Mật khẩu phải được điền')"
                                onchange="this.setCustomValidity('')" autocomplete="new-password">

                                @error('mat_khau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Nhập Lại Mật Khẩu') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required oninvalid="this.setCustomValidity('Phải nhập lại mật khẩu')"
                                onchange="this.setCustomValidity('')"  autocomplete="new-password">
                                <span id='tb' name="tb"></span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Đăng Ký') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <component :is="'script'">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    document.getElementById('password_confirm').onkeyup=function(){
        var password = $("#mat_khau").val();
        var confirm_password = $("#password_confirm").val();
        if(password != confirm_password) {
               $("#password_confirm").css('border-color', "red");
        }
            else{
               $("#password_confirm ").css('border-color', "green");
            }
    }
</component> --}}
@endsection
