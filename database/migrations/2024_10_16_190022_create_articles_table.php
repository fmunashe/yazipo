<?php

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Author::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('country_code')->default('ZW');
            $table->string('title')->unique();
            $table->longText('description');
            $table->longText('imageUrl')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
