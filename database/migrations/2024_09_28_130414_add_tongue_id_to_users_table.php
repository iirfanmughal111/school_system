<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTongueIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('tongue_id')->nullable()->after('id'); // Add your desired column here
            $table->unsignedBigInteger('religion_id')->nullable()->after('id'); // Add your desired column here

            $table->foreign('tongue_id')->references('id')->on('tongue')->onDelete('set null'); // Foreign key constraint
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('set null'); // Foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['tongue_id']); // Drop foreign key constraint
            $table->dropForeign(['religion_id']); // Drop foreign key constraint
            
            $table->dropColumn('tongue_id'); // Remove the column
            $table->dropColumn('religion_id'); // Remove the column
        });
    }
}
