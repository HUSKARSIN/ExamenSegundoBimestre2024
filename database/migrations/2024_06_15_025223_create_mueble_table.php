<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuebleTable extends Migration
{
    public function up()
    {
        Schema::create('mueble', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('material');
            $table->decimal('precio', 8, 2);
            $table->string('imagen');
            /*$table->timestamps();*/
        });
    }

    public function down()
    {
        Schema::dropIfExists('mueble');
    }
}
