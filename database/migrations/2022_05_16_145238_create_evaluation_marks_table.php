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
        Schema::create('evaluation_marks', function (Blueprint $table) {
            $table->id('eva_id');
            /*$table->foreign('std_id')
                  ->references('std_id')->on('students')*/
            $table->string('mark_id');
            $table->string('std_id');
            $table->string('std_name');
            $table->double('eva_mark', 8, 2);
            $table->string('eva_comment');
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
        Schema::dropIfExists('evaluation_marks');
    }
};
