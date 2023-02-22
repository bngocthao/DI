<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bảng đơn vị
            Schema::create('don_vi', function (Blueprint $table) {
                $table->id();
                $table->string('ten_don_vi');
                $table->integer('cap')->nullable();
                $table->unsignedBigInteger('don_vi_cha')->nullable();
                $table->timestamps();
            });

        // bảng ngành 
        Schema::create('nganh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ma_don_vi');
            $table->string('ten_nganh');
            $table->timestamps();
        });
        

        // bảng học phần
        Schema::create('hoc_phan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ma_hoc_phan');
            $table->string('ten_hoc_phan');
            $table->integer('don_vi_hoc_tap');
            $table->timestamps();
        });
        

        //bảng học phần ngành
        Schema::create('hoc_phan_nganh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ma_nganh');
            $table->unsignedBigInteger('ma_hoc_phan');
            $table->timestamps();
        });
        

        // bảng nhóm
        Schema::create('nhom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ma_hoc_phan');
            $table->integer('nhom');
            $table->timestamps();
        });
        

        // bảng học kỳ
        Schema::create('hoc_ky', function (Blueprint $table) {
            $table->id();
            $table->string('hoc_ky');
            $table->timestamps();
        });

        //bảng năm
        Schema::create('nam', function (Blueprint $table) {
            $table->id();
            $table->string('nam');
            $table->timestamps();
        });

        // bảng vai trò
        Schema::create('vai_tro', function (Blueprint $table) {
            $table->id();
            $table->string('vai_tro');
            $table->timestamps();
        });

        // bảng vai trò của người dùng
        // Schema::create('vai_tro_nguoi_dung', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('ma_nguoi_dung');
        //     $table->unsignedBigInteger('ma_vai_tro');
        //     $table->timestamps();
        // });

        // Bảng ý kiến
        Schema::create('y_kien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ma_don');
            $table->unsignedBigInteger('ma_nguoi_dung');
            $table->string('y_kien');
            $table->string('trang_thai');
            $table->timestamps();
        });

        // bảng đơn xin vắng
        Schema::create('don_xin_vang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('ma_hoc_ky_nam');
            $table->unsignedBigInteger('ma_nguoi_dung');
            $table->unsignedBigInteger('ma_nhom');
            $table->unsignedBigInteger('ma_giang_vien');
            $table->string('ly_do');
            $table->string('giay_xac_nhan')->nullable();
            $table->integer('trang_thai')->nullable();
            $table->string('y_kien')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_tables');
    }
};
