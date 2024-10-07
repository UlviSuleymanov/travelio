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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string("title",500);
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("admin_id");
            $table->longText("description");
            $table->string("slug",500);
            $table->tinyInteger("status")->default(1);
            $table->string("thumb",1500)->nullable();
            $table->string("image",1500)->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('admin_id')->references('id')->on('administration')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
