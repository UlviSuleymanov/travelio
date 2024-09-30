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
        Schema::create('administration', function (Blueprint $table) {
            $table->id();
            $table->string("full_name",500);
            $table->string("email",500);
            $table->string("password",500);
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
            $table->timestamp("deleted_at");
            $table->tinyInteger("email_verify");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminstration');
    }
};
