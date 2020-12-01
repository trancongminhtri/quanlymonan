<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idnv');
            $table->date('ngaylap');
            $table->time('giolap');
            $table->decimal('thanhtien', 18, 3);
            $table->decimal('khachtra', 18, 3);
            $table->decimal('tienthua', 18, 3);
            $table->integer('tang');
            $table->integer('ban');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('hoadons', function (Blueprint $table) {
            $table->foreign('idnv')->references('id')->on('nhanviens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}
