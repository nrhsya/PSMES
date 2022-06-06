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
        Schema::create('fyp_details', function (Blueprint $table) {
            $table->id();
            $table->string('std_id');
            $table->string('std_name');
            $table->string('sv_name');
            $table->string('eva_name');
            $table->string('fyp_title');
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
        Schema::dropIfExists('fyp_details');
    }
};
