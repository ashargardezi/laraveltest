<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->dateTime('create_at');
            $table->dateTime('update_at');




            
// Full texts
// id	
// username	
// first_name	
// last_name	
// email	
// password_hash	
// create_at	
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
