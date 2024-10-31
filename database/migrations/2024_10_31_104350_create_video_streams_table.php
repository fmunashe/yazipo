<?php

use App\Models\Video;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_streams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Video::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string("full_format");
            $table->string("500_format");
            $table->string("1500_format");
            $table->string("3000_format");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_streams');
    }
};
