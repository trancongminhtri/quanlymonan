<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadons', function (Blueprint $table) {
            $table->unsignedBigInteger('idhd');
            $table->unsignedBigInteger('idsp');
            $table->string('tensp', 50);
            $table->integer('soluong');
            $table->decimal('tongtien', 18, 3);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('chitiethoadons', function (Blueprint $table) {
            $table->foreign('idhd')->references('id')->on('hoadons');
            $table->foreign('idsp')->references('id')->on('sanphams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadons');
    }
}
