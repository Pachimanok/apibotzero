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
        Schema::create('customer_cnees', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->integer('tax_id');
            $table->string('pais');
            $table->string('provincia');
            $table->string('mail');
            $table->interger('phone');
            $table->string('user');
            $table->strign('empresa');
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
        Schema::dropIfExists('customer_cnees');
    }
};
