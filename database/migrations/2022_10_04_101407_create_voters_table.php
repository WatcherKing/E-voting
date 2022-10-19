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
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('local_gov_id')->constrained('local_govs');
            $table->foreignId('state_id')->constrained('states');
            $table->foreignId('user_id')->constrained('users')->unique();
            $table->string('name', 255);
            $table->string('vin', 255)->unique();
            $table->string('age', 255)->default(18);
            $table->string('image', 255)->nullable();
            $table->string('dob', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('voter_code', 255)->unique();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('voters');
    }
};
