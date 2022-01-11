<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('info_title')->nullable();
            $table->string('info_subtitle')->nullable();
            $table->text('info_description')->nullable();
            $table->string('info_section_title')->nullable();
            $table->string('info_section_subtitle')->nullable();
            $table->text('info_section_descriotion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('behance')->nullable();
            $table->string('github')->nullable();
            $table->string('info_image')->nullable();
            $table->string('info_section_image')->nullable();
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
        Schema::dropIfExists('information');
    }
}
