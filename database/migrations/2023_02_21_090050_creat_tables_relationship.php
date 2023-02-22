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
        Schema::table('don_vi', function (Blueprint $table) 
        {
            $table->foreign('don_vi_cha')->references('id')->on('don_vi')->onDelete('set null');
        });

        Schema::table('nganh', function (Blueprint $table) 
        {
            $table->unsignedBigInteger('ma_don_vi')->nullable()->change();
            $table->foreign('ma_don_vi')->references('id')->on('don_vi')->onDelete('set null');
        });

        Schema::table('hoc_phan', function (Blueprint $table) 
        {
            $table->renameColumn('don_vi_hoc_tap', 'ma_nganh');
        });

        Schema::table('hoc_phan', function (Blueprint $table) 
        {
        $table->unsignedBigInteger('ma_nganh')->change();
        $table->foreign('ma_nganh')->references('id')->on('hoc_phan_nganh');
        });

        Schema::table('hoc_phan_nganh', function (Blueprint $table) 
        {
            $table->foreign('ma_hoc_phan')->references('id')->on('hoc_phan');
            $table->foreign('ma_nganh')->references('id')->on('nganh');
        });


        Schema::table('nhom', function (Blueprint $table) 
        {
            $table->foreign('ma_hoc_phan')->references('id')->on('hoc_phan_nganh');
        });

        Schema::table('don_xin_vang', function (Blueprint $table) 
        {
            $table->renameColumn('ma_hoc_ky_nam', 'ma_hoc_ky');
            $table->unsignedBigInteger('ma_nam');
            $table->foreign('ma_hoc_ky')->references('id')->on('hoc_ky');
            $table->foreign('ma_nam')->references('id')->on('nam');
            $table->foreign('ma_nhom')->references('id')->on('nhom');
        });

        Schema::table('nguoidung', function (Blueprint $table) 
        {
            $table->foreign('ma_vai_tro')->references('id')->on('vai_tro');
        });

        Schema::table('y_kien', function (Blueprint $table) 
        {
            $table->foreign('ma_don')->references('id')->on('don_xin_vang');
            $table->foreign('ma_nguoi_dung')->references('id')->on('nguoidung');
        });

        // Schema::table('vai_tro_nguoi_dung', function (Blueprint $table) 
        // {
        //     // $table->foreign('ma_nguoi_dung')->references('id')->on('nguoi_dung');
        //     $table->foreign('ma_vai_tro')->references('id')->on('vai_tro');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
