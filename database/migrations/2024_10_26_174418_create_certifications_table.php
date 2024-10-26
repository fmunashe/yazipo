<?php

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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('url')->nullable();
            $table->string('question')->unique();
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->integer('answer');
            $table->longText('description');
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('country_code')->default('ZW');
            $table->boolean('status')->default(true);
            $table->foreign('country_code')->references('code')->on('countries');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
