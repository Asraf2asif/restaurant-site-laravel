<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialdishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialdishes', function (Blueprint $table) {
            $table->id();
            $table->string('namepart1', 200);
            $table->string('namepart2', 200);
            $table->string('img', 250);
            $table->text('desc');
            $table->decimal('price', $precision = 10, $scale = 2)->default(0);
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
        Schema::dropIfExists('specialdishes');
    }
}
