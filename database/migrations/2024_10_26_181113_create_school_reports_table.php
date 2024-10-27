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
        Schema::create('school_reports', function (Blueprint $table) {
            $table->id();
            $table->string('alias');
            $table->string('contact_number');
            $table->string('report');
            $table->string('station')->nullable();
            $table->string('nameOfMember')->nullable();
            $table->string('designation')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('notification_type')->default('Reporting');
            $table->string('province');
            $table->string('country_name');
            $table->string('country_code');

            $table->boolean('is_resolved')->default(false);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_reports');
    }
};
