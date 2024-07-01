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
        Schema::table('posts', function (Blueprint $table) {
            // $table->foreignId('user_id')->after('id')->constrained()
            // ->onUpdate('cascade')
            // ->onDelete('cascade')
            // ;

            Schema::table('posts', function (Blueprint $table) {
                $table->foreignId('user_id')->after('id')->constrained(
                    table: 'users',
                    indexName: 'posts_user_id'
                )
                    ->onUpdate('cascade') 
                    ->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
