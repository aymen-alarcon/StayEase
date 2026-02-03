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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("status");
            $table->foreignId("image_id")->constrained();
            $table->foreignId("tag_id")->constrained();
            $table->foreignId("propriete_id")->constrained();
            $table->foreignId("category_id")->constrained();
            $table->foreignId("hotel_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambre');
    }
};
