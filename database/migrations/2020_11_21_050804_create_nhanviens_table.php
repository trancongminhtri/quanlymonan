<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idlnv');
            $table->string('hoten', 50);
            $table->string('gioitinh', 3);
            $table->string('cmnd', 12);
            $table->date('ngaysinh');
            $table->string('dienthoai', 11);
            $table->string('diachi', 50);
            $table->string('taikhoan', 100);
            $table->string('matkhau', 100);
            $table->integer('trangthai');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('nhanviens', function (Blueprint $table) {
            $table->foreign('idlnv')->references('id')->on('loainvs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanviens');
    }
}
