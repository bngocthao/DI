<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->id();
            $table->string('ma_nguoi_dung')->unique();
            $table->string('ho_ten');
            $table->unsignedBigInteger('ma_vai_tro');
            $table->string('ten_dang_nhap');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mat_khau');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoidung');
    }
};
