<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('lga_id')->nullable();
            $table->string('state_id')->nullable();
            $table->bigInteger('user_id')->nullable()->unique();
            $table->string('created_by')->nullable();
            $table->string('modified_by')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->softDeletes();  // Add this line to enable soft deletes
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
        Schema::dropIfExists('institutes');
    }
}
