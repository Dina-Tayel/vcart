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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("profile_pic")->nullable()->default("avatar.png");
            $table->string("email");
            $table->string("phone");
            $table->string("fb");
            $table->string("linkedin");
            $table->string("github");
            $table->bigInteger("user_id");
            $table->tinyInteger("role")->default(0);
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
        Schema::dropIfExists('profiles');
    }
};
