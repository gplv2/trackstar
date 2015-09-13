<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('imei')->unsigned();
            $table->string('label',50);
            $table->string('description',128);
            $table->smallInteger('group');
            $table->smallInteger('active');
            $table->smallInteger('multi_wire')->unsigned();
            $table->smallInteger('rfid_reader')->unsigned();
            $table->smallInteger('ibutton_reader')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devices');
    }
}
