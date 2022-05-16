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
        Schema::create('newhomes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('flat_number');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('area');
            $table->string('city');
            $table->string('buyORrent');
            $table->string('price');
            $table->string('bhk');
            $table->string('door_facing');
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
        Schema::dropIfExists('newhome');
    }
};
