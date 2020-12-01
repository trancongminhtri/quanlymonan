<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idlsp');
            $table->unsignedBigInteger('idha');
            $table->string('tensp', 50);
            $table->decimal('dongia', 18, 3);
            $table->string('mota', 100);
            $table->integer('trangthai');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('sanphams', function (Blueprint $table) {
            $table->foreign('idlsp')->references('id')->on('loaisps');
            $table->foreign('idha')->references('id')->on('hinhanhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
