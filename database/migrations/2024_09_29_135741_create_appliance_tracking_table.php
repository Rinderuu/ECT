<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appliance_tracking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profile')->onDelete('cascade');
            $table->string('appliance');
            $table->decimal('wattage', 8, 2);
            $table->integer('hours');
            $table->decimal('cost_per_kwh', 8, 2);
            $table->decimal('monthly_consumption', 8, 2);
            $table->decimal('total_cost', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appliance_tracking');
    }
};
