<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('term');
            $table->string('year', 40);
            $table->integer('institute_id')->default(1);
            $table->integer('campus_id')->default(0);
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();
        });

        // Schema::table('exams', function (Blueprint $table) {
            // $table->unique(['term', 'year']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
