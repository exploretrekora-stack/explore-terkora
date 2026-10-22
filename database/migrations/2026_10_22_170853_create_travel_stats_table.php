<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('travel_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('happy_travelers')->default(290);
            $table->decimal('average_rating', 3, 1)->default(4.9);
            $table->unsignedInteger('years_of_experience')->default(2);
            $table->unsignedInteger('team_members')->default(4);
            $table->unsignedInteger('trips_completed')->default(40);
            $table->unsignedInteger('verified_reviews')->default(100);
            $table->timestamps();
        });

        DB::table('travel_stats')->insertOrIgnore([
            'id' => 1,
            'happy_travelers' => 290,
            'average_rating' => 4.9,
            'years_of_experience' => 2,
            'team_members' => 4,
            'trips_completed' => 40,
            'verified_reviews' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_stats');
    }
};
