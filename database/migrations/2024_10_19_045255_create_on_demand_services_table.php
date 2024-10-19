<?php

use App\Models\District;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('on_demand_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(District::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('country_code')->default('ZW');
            $table->boolean('status')->default(true);
            $table->foreign('country_code')->references('code')->on('countries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('on_demand_services');
    }
};
