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
            $table->double('excellent_grade');
            $table->double('good_grade');
            $table->double('moderate_grade');
            $table->double('weak_grade');
            $table->double('vweak_grade');
            $table->double('fail_grade');
            $table->double('weightage');
            $table->double('mark_given');
            $table->double('final_percent');
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
