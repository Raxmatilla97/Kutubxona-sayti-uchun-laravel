<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kutubxona_id');
            $table->string('title', 255);
            $table->string('url');
            $table->longText('description')->nullable();
            $table->string('img')->nullable();
            $table->boolean('kutubxonada_bormi')->nullable();
            $table->string('nashir_etilgan_yil')->nullable();
            $table->string('varoq_soni')->nullable();
            $table->string('qr_code_url')->nullable();
            $table->string('languages')->nullable();
            $table->string('file_pdf_local')->nullable();
            $table->string('file_word_local')->nullable();
            $table->string('file_url')->nullable();
            $table->string('likes')->nullable();
            $table->string('count_downloands')->nullable();
            $table->string('count_views')->nullable();
            $table->string('mualif')->nullable();
            $table->boolean('has_active')->default(false);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('kutubxona_id')->references('id')->on('librays')->onDelete('cascade');

            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('books');
    }
}
