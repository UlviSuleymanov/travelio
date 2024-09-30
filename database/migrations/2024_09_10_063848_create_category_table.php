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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->integer("parent_id")->nullable();
            $table->string("title",500);
            $table->string("keywords",1500);
            $table->tinyInteger("status")->default(1);
            $table->tinyInteger("selected")->default(0);
            $table->timestamp("created_at");
            $table->timestamp("deleted_at");
            $table->string("image",1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
