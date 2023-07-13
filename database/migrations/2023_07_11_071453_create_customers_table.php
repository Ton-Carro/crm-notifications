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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('agreement_number')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('hp_customer_name')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('status')->nullable();
            $table->string('guarantor_name')->nullable();
            $table->string('guarantor_telephone_number')->nullable();
            $table->string('customer_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
