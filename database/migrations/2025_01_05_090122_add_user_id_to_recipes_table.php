<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id'); // Add user_id column
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Create a foreign key relationship with the users table
    });
}

public function down()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->dropForeign(['user_id']); // Drop foreign key
        $table->dropColumn('user_id'); // Drop user_id column
    });
}

};
