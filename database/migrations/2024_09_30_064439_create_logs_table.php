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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->integer("admin_id");
            $table->integer("process_type_id");
            $table->integer("process_id"); //entitinin idsi.
            $table->timestamps();

            $table->foreign('admin_id')->references('id')
                ->on('administration')->onDelete("cascade");
            $table->foreign('process_type_id')->references("id")
                ->on("process_type")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
