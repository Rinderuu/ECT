<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('appliance_tracking', function (Blueprint $table) {
            // Adding new cost columns
            $table->decimal('daily_cost', 8, 2)->after('total_cost')->nullable();
            $table->decimal('weekly_cost', 8, 2)->after('daily_cost')->nullable();
            $table->decimal('yearly_cost', 8, 2)->after('weekly_cost')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('appliance_tracking', function (Blueprint $table) {
            // Dropping the added columns on rollback
            $table->dropColumn(['daily_cost', 'weekly_cost', 'yearly_cost']);
        });
    }
};
