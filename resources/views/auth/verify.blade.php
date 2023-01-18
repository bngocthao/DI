@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Xác Thực Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Đường dẫn xác thực đã được gửi đến email của bạn.') }}
                        </div>
                    @endif

                    {{ __('Để đăng nhập, hãy xác thực địa chỉ email.') }}
                    {{ __('Nếu bạn không nhận được mail, hãy chọn gửi lại') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('gửi lại') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
