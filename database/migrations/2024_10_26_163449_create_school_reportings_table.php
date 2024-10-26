<?php

use App\Models\Province;
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
        Schema::create('school_reportings', function (Blueprint $table) {
            $table->id();
            $table->string('station')->nullable(); // Station
            $table->string('name_of_member')->nullable(); // Name of Member
            $table->string('designation')->nullable(); // Designation
            $table->string('msisdn')->nullable(); // Contact No
            $table->string('email')->nullable(); // Email address
            $table->foreignIdFor(Province::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();// Province/Station
            $table->string('country_code')->default('ZW');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('country_code')->references('code')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_reportings');
    }
};
