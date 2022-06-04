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
        Schema::create('rubrics', function (Blueprint $table) {
            $table->id();
            $table->string('rubric_id');
            $table->string('competency');
            $table->string('excellent_grade');
            $table->string('good_grade');
            $table->string('moderate_grade');
            $table->string('weak_grade');
            $table->string('vweak_grade');
            $table->string('fail_grade');
            $table->string('weightage');
            $table->string('mark_given');
            $table->string('final_percent');
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
        Schema::dropIfExists('rubrics');
    }
};
