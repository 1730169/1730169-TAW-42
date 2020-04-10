<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromocionsTable extends Migration
{
    public function up()
    {
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_dulceria');
            $table->decimal('monedas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promocions');
    }
}
