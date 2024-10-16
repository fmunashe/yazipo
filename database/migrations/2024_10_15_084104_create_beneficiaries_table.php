<?php

use App\Models\KeyPopulation;
use App\Models\Location;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiary_id')->unique();
            $table->string('name')->default('Not Specified');
            $table->string('phone')->default('Not Specified');
            $table->string('phone_2')->default('Not Specified');
            $table->string('phone_3')->default('Not Specified');
            $table->date('date_of_birth')->nullable();
            $table->string('sex')->default('Not Specified');
            $table->string('marital_status')->default('Not Specified');
            $table->string('xul_status')->default('Not Specified');
            $table->foreignIdFor(KeyPopulation::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Location::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
