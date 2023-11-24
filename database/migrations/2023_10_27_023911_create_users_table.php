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
            $table->bigIncrements('id');
            $table->char('email', 150);
            $table->char('name', 100);
            $table->char('passport_series', 40);
            $table->char('passport_number', 60);
            $table->date('give_passport_date');
            $table->string("organisation_name");
            $table->char('code', 60);
            $table->string('password', 255);
            $table->timestamps();
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
