<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('slider_image')->nullable();
            $table->text('description')->nullable();
            $table->string('students')->nullable();
            $table->string('faculties')->nullable();
            $table->string('branches')->nullable();
            $table->string('awards')->nullable();
            $table->string('experties_name')->nullable();
            $table->string('experties_title')->nullable();
            $table->string('experties_image')->nullable();
            $table->string('reviewer_name')->nullable();
            $table->string('reviewer_title')->nullable();
            $table->string('reviewer_comments')->nullable();
            $table->string('reviewer_description')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
