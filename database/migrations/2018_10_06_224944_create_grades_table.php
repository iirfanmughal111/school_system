<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->unsignedInteger('class_type_id')->nullable();
            $table->tinyInteger('mark_from');
            $table->tinyInteger('mark_to');
            $table->string('remark', 40)->nullable();
            $table->integer('institute_id')->default(1);
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps();

            // Add the unique constraint directly when creating the table
            $table->unique(['name', 'class_type_id', 'remark']);
        });

        // Define the foreign key constraint after the table creation
        Schema::table('grades', function (Blueprint $table) {
            $table->foreign('class_type_id')
                  ->references('id')
                  ->on('class_types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // First, drop the foreign key constraints
        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign(['class_type_id']);
        });

        // Then drop the table
        Schema::dropIfExists('grades');
    }
}
