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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('destination', 160);
            $table->text('review');
            $table->string('image')->nullable();
            $table->unsignedTinyInteger('rating')->default(5);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        $now = now();
        $initialReviews = [
            [
                'id' => 1,
                'name' => 'Rajesh Patel',
                'destination' => 'Adi Kailash & Om Parvat Yatra',
                'review' => 'Standing in front of the sacred Om Parvat gave us goosebumps. Trekora handled all the inner line permits and high-altitude logistics seamlessly.',
                'image' => 'images/story-1.jpg',
                'rating' => 5,
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Aarav Sharma',
                'destination' => 'Khaliya Top, Munsiyari',
                'review' => 'Waking up to the 360-degree panoramic view of Panchachuli peaks from Khaliya Top was the highlight of our trek. Superbly organized camp!',
                'image' => 'images/story-2.jpg',
                'rating' => 5,
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Vikram Desai',
                'destination' => 'Milam Glacier Expedition',
                'review' => 'The rugged Johar Valley trails were thrilling and awe-inspiring. Our trek lead was exceptionally skilled and safety was never compromised.',
                'image' => 'images/story-3.jpg',
                'rating' => 5,
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'name' => 'Priya Shah',
                'destination' => 'Kareri Lake, Himachal',
                'review' => 'Camping beside the crystal clear glacial waters of Kareri Lake under a sky full of stars was truly a dream come true.',
                'image' => 'images/story-4.jpg',
                'rating' => 5,
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'name' => 'Sneha Kulkarni',
                'destination' => 'Dalhousie & Dharamshala Tour',
                'review' => 'A serene vacation amidst pine-scented woods, colonial charm, and Tibetan monasteries. Everything was punctual and hassle-free.',
                'image' => 'images/story-6.jpg',
                'rating' => 5,
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'name' => 'Bhavik Dave',
                'destination' => 'Girnar Hill Trek & Junagadh Exploration',
                'review' => 'Ascending the sacred 10,000 steps of Mount Girnar at sunrise was unforgettable. Well-planned halts and comfortable stays made it effortless.',
                'image' => 'images/story-7.jpg',
                'rating' => 5,
                'sort_order' => 6,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'name' => 'Ananya Mehta',
                'destination' => 'Mount Abu',
                'review' => 'Exploring hidden trails through the Aravalli hills away from the tourist crowd was refreshing. Cozy eco-cottages and delicious meals!',
                'image' => 'images/story-8.jpg',
                'rating' => 5,
                'sort_order' => 7,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'name' => 'Hardik Trivedi',
                'destination' => 'Dang Forest Circuit',
                'review' => 'Dense monsoon teak forests, secret waterfalls, and warm tribal hospitality. Explore Trekora made our Dang family trip deeply memorable.',
                'image' => 'images/story-9.jpg',
                'rating' => 5,
                'sort_order' => 8,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'name' => 'Amit Vora',
                'destination' => 'Dediyapada Wilderness Trek',
                'review' => 'Pure untouched wilderness in Shoolpaneshwar. River treks, clean homestays, and pristine waterfalls made this our best weekend escape.',
                'image' => 'images/story-10.jpg',
                'rating' => 5,
                'sort_order' => 9,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'name' => 'Tanvi Sawant',
                'destination' => 'Gateway to Malvan',
                'review' => 'Scuba diving around Sindhudurg and sunset kayaking at Khavane beach was magical. Fresh Malvani food and coastal hospitality made it a perfect trip.',
                'image' => 'images/trips/gateway-to-malvan/1.jpg',
                'rating' => 5,
                'sort_order' => 10,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('reviews')->insertOrIgnore($initialReviews);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
