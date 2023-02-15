<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.header')
    <title>Home page</title>
</head>
<body>
@include('admin.navbar')
<div class="page-body">
    <div class="row">
        <!-- task, page, download counter  start -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-yellow update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">$30200</h4>
                            <h6 class="text-white m-b-0">Tổng Số Đơn</h6>
                        </div>
                        <div class="col-4 text-right">
                            <canvas id="update-chart-1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-green update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">290+</h4>
                            <h6 class="text-white m-b-0">Đang Chờ Xử Lý</h6>
                        </div>
                        <div class="col-4 text-right">
                            <canvas id="update-chart-2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-pink update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">145</h4>
                            <h6 class="text-white m-b-0">Đã Duyệt</h6>
                        </div>
                        <div class="col-4 text-right">
                            <canvas id="update-chart-3" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-lite-green update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">500</h4>
                            <h6 class="text-white m-b-0">Đã Hủy</h6>
                        </div>
                        <div class="col-4 text-right">
                            <canvas id="update-chart-4" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <!-- task, page, download counter  end -->
@include('admin.footer')
</body>
</html>