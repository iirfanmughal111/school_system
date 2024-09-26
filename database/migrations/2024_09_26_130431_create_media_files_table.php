<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_files', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->unsignedBigInteger('institute_id')->nullable(); // Reference to institutes table
            $table->string('path'); // Path where the file is stored
            $table->string('image_type')->nullable(); // Type of the image (thumbnail, etc.)
            $table->string('file_ext', 10)->nullable(); // File extension (e.g., jpg, png, pdf)
            $table->unsignedBigInteger('user_id')->nullable(); // Reference to user who uploaded the file
            $table->timestamps(); // Created at and updated at

            // Foreign key constraints
            $table->foreign('institute_id')->references('id')->on('institutes')->onDelete('cascade');
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_files');
    }
}
