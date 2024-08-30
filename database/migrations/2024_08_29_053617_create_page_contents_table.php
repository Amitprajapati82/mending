<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_name'); 
            $table->unsignedBigInteger('banner_id')->nullable();
            $table->unsignedBigInteger('intro_id')->nullable(); 
            $table->string('title');
            $table->text('description');
            $table->text('images')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->timestamps();

            
            $table->foreign('banner_id')->references('id')->on('page_banners')->onDelete('set null');
            $table->foreign('intro_id')->references('id')->on('page_introductions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_contents');
    }
}
