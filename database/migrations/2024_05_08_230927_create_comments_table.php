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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('nft_id');
            $table->foreign('nft_id')->references('id')->on('nft')->onDelete('cascade');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')
                ->references('id')
                ->on('users');
            $table->text('content');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
