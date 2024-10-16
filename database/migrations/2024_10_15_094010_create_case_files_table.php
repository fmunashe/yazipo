<?php

use App\Models\Beneficiary;
use App\Models\ModeOfCommunication;
use App\Models\Service;
use App\Models\ServiceProvider;
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
        Schema::create('case_files', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Beneficiary::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ModeOfCommunication::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ServiceProvider::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('call_duration')->nullable();
            $table->boolean('confirmed_service_uptake')->default(false);
            $table->boolean('confirmed_service_delivery')->default(false);
            $table->date('date_of_birth')->nullable();
            $table->string('sex')->default('Not Specified');
            $table->string('counselor_notes')->nullable();
            $table->boolean('case_status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_files');
    }
};
