<?php

use App\Models\Country;
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
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('organisationName');
            $table->string('organisationLogoUrl')->default("https://via.placeholder.com/350");
            $table->string('focalPerson')->default('No Focal Person Data Available');
            $table->string('cell1')->nullable();
            $table->string('cell2')->nullable();
            $table->string('cell3')->nullable();
            $table->string('websiteLink')->nullable();
            $table->string('emailLink')->nullable();
            $table->string('whatsAppLink')->nullable();
            $table->string('facebookLink')->nullable();
            $table->string('instagramLink')->nullable();
            $table->string('twitterLink')->nullable();
            $table->string('linkedInLink')->nullable();
            $table->string('gpsLink')->nullable();
            $table->text('description')->nullable();
            $table->string('streetAddress')->nullable();
            $table->string('operatingHours')->nullable();
            $table->boolean('status')->default(true);
            $table->foreignIdFor(District::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Province::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Country::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisations');
    }
};
