<?php

use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('dueDate')->nullable();
            $table->longText('url')->nullable();
            $table->longText('postImageUrl');
            $table->foreignIdFor(District::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete()->default(3);
            $table->foreignIdFor(Province::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete()->default(3);
            $table->string('country_code')->default('ZW');
            $table->foreign('country_code')->references('code')->on('countries')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('opportunities');
    }
};
