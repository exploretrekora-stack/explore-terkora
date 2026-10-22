<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Review extends Model
{
    /**
     * Cache key for public active reviews list.
     */
    public const CACHE_KEY = 'public_active_reviews';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'destination',
        'review',
        'image',
        'rating',
        'sort_order',
        'is_active',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Bootstrap model events to invalidate cache on modification.
     */
    protected static function booted(): void
    {
        static::saved(function () {
            static::clearCache();
        });

        static::deleted(function () {
            static::clearCache();
        });
    }

    /**
     * Scope a query to only include active reviews.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order reviews for frontend display.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('id', 'asc');
    }

    /**
     * Get active reviews cached for fast public page load.
     * Caches raw array of attributes to prevent __PHP_Incomplete_Class serialization issues.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function allActiveCached(): array
    {
        try {
            $fetch = function (): array {
                $reviews = static::query()
                    ->active()
                    ->ordered()
                    ->get();

                if ($reviews->isEmpty() && static::query()->count() === 0) {
                    static::seedDefaults();
                    $reviews = static::query()
                        ->active()
                        ->ordered()
                        ->get();

                    if ($reviews->isEmpty()) {
                        return static::defaultReviewsMapped();
                    }
                }

                return $reviews
                    ->map(fn (self $rev) => [
                        'id' => $rev->id,
                        'author' => $rev->name,
                        'trip' => $rev->destination,
                        'tag' => $rev->destination,
                        'quote' => $rev->review,
                        'rating' => $rev->rating,
                        'image' => $rev->image_url,
                    ])
                    ->all();
            };

            if (app()->runningUnitTests()) {
                return $fetch();
            }

            $data = Cache::rememberForever(self::CACHE_KEY, $fetch);

            return is_array($data) ? $data : static::defaultReviewsMapped();
        } catch (\Throwable) {
            return static::defaultReviewsMapped();
        }
    }

    /**
     * Default customer reviews mapped for frontend presentation.
     *
     * @return list<array<string, mixed>>
     */
    public static function defaultReviewsMapped(): array
    {
        return array_map(function ($item, $idx) {
            return [
                'id' => $idx + 1,
                'author' => $item['name'],
                'trip' => $item['destination'],
                'tag' => $item['destination'],
                'quote' => $item['review'],
                'rating' => $item['rating'] ?? 5,
                'image' => asset($item['image']),
            ];
        }, static::defaultReviews(), array_keys(static::defaultReviews()));
    }

    /**
     * Seed default customer reviews when table is empty.
     */
    public static function seedDefaults(): void
    {
        try {
            if (static::query()->count() === 0) {
                foreach (static::defaultReviews() as $item) {
                    static::query()->create($item);
                }
            }
        } catch (\Throwable) {
            // Silently handle if table not yet migrated
        }
    }

    /**
     * Default customer reviews for fresh environments.
     *
     * @return list<array<string, mixed>>
     */
    public static function defaultReviews(): array
    {
        return [
            [
                'name' => 'Rajesh Patel',
                'destination' => 'Adi Kailash & Om Parvat Yatra',
                'review' => 'Standing in front of the sacred Om Parvat gave us goosebumps. Trekora handled all the inner line permits and high-altitude logistics seamlessly.',
                'image' => 'images/story-1.jpg',
                'rating' => 5,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Aarav Sharma',
                'destination' => 'Khaliya Top, Munsiyari',
                'review' => 'Waking up to the 360-degree panoramic view of Panchachuli peaks from Khaliya Top was the highlight of our trek. Superbly organized camp!',
                'image' => 'images/story-2.jpg',
                'rating' => 5,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Vikram Desai',
                'destination' => 'Milam Glacier Expedition',
                'review' => 'The rugged Johar Valley trails were thrilling and awe-inspiring. Our trek lead was exceptionally skilled and safety was never compromised.',
                'image' => 'images/story-3.jpg',
                'rating' => 5,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Priya Shah',
                'destination' => 'Kareri Lake, Himachal',
                'review' => 'Camping beside the crystal clear glacial waters of Kareri Lake under a sky full of stars was truly a dream come true.',
                'image' => 'images/story-4.jpg',
                'rating' => 5,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Sneha Kulkarni',
                'destination' => 'Dalhousie & Dharamshala Tour',
                'review' => 'A serene vacation amidst pine-scented woods, colonial charm, and Tibetan monasteries. Everything was punctual and hassle-free.',
                'image' => 'images/story-6.jpg',
                'rating' => 5,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Bhavik Dave',
                'destination' => 'Girnar Hill Trek & Junagadh Exploration',
                'review' => 'Ascending the sacred 10,000 steps of Mount Girnar at sunrise was unforgettable. Well-planned halts and comfortable stays made it effortless.',
                'image' => 'images/story-7.jpg',
                'rating' => 5,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Ananya Mehta',
                'destination' => 'Mount Abu',
                'review' => 'Exploring hidden trails through the Aravalli hills away from the tourist crowd was refreshing. Cozy eco-cottages and delicious meals!',
                'image' => 'images/story-8.jpg',
                'rating' => 5,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Hardik Trivedi',
                'destination' => 'Dang Forest Circuit',
                'review' => 'Dense monsoon teak forests, secret waterfalls, and warm tribal hospitality. Explore Trekora made our Dang family trip deeply memorable.',
                'image' => 'images/story-9.jpg',
                'rating' => 5,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Amit Vora',
                'destination' => 'Dediyapada Wilderness Trek',
                'review' => 'Pure untouched wilderness in Shoolpaneshwar. River treks, clean homestays, and pristine waterfalls made this our best weekend escape.',
                'image' => 'images/story-10.jpg',
                'rating' => 5,
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Tanvi Sawant',
                'destination' => 'Gateway to Malvan',
                'review' => 'Scuba diving around Sindhudurg and sunset kayaking at Khavane beach was magical. Fresh Malvani food and coastal hospitality made it a perfect trip.',
                'image' => 'images/trips/gateway-to-malvan/1.jpg',
                'rating' => 5,
                'sort_order' => 10,
                'is_active' => true,
            ],
        ];
    }

    /**
     * Predefined list of destinations for admin reviews selection.
     *
     * @return list<string>
     */
    public static function availableDestinations(): array
    {
        return [
            'Adi Kailash & Om Parvat Yatra',
            'Khaliya Top, Munsiyari',
            'Milam Glacier Diaries',
            'Kareri Lake Trek',
            'Dalhousie & Dharamshala Tour',
            'Girnar Hill Trek & Junagadh Exploration',
            'Mount Abu',
            'Dang Forest Circuit',
            'Dediyapada Wilderness Trek',
            'Gateway to Malvan',
            'Char Dham Yatra 2026',
            'Haridwar & Rishikesh',
            'Harihar Fort & Harishchandragad',
            'Munsiyari & Kausani',
            'Sembalpani Eco Trek & Hills',
            'Himachal Pradesh',
            'Uttarakhand',
            'Maharashtra Hill Stations',
        ];
    }

    /**
     * Invalidate the cached reviews.
     */
    public static function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Resolve image URL for public display.
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
                return $this->image;
            }

            return asset($this->image);
        }

        $destinationMap = [
            'Adi Kailash & Om Parvat Yatra' => 'images/story-1.jpg',
            'Khaliya Top, Munsiyari' => 'images/story-2.jpg',
            'Milam Glacier Diaries' => 'images/story-3.jpg',
            'Milam Glacier Expedition' => 'images/story-3.jpg',
            'Kareri Lake Trek' => 'images/story-4.jpg',
            'Kareri Lake, Himachal' => 'images/story-4.jpg',
            'Dalhousie & Dharamshala Tour' => 'images/story-6.jpg',
            'Girnar Hill Trek & Junagadh Exploration' => 'images/story-7.jpg',
            'Mount Abu' => 'images/story-8.jpg',
            'Dang Forest Circuit' => 'images/story-9.jpg',
            'Dediyapada Wilderness Trek' => 'images/story-10.jpg',
            'Gateway to Malvan' => 'images/trips/gateway-to-malvan/1.jpg',
            'Char Dham Yatra 2026' => 'images/story-1.jpg',
            'Harihar Fort & Harishchandragad' => 'images/story-7.jpg',
            'Munsiyari & Kausani' => 'images/story-2.jpg',
            'Sembalpani Eco Trek & Hills' => 'images/story-9.jpg',
        ];

        if ($this->destination && isset($destinationMap[$this->destination])) {
            return asset($destinationMap[$this->destination]);
        }

        // Deterministic fallback among default story images based on id
        $fallbacks = [
            'images/story-1.jpg',
            'images/story-2.jpg',
            'images/story-3.jpg',
            'images/story-4.jpg',
            'images/story-6.jpg',
            'images/story-7.jpg',
            'images/story-8.jpg',
            'images/story-9.jpg',
            'images/story-10.jpg',
        ];

        $idx = ($this->id ? ($this->id - 1) : 0) % count($fallbacks);

        return asset($fallbacks[$idx]);
    }
}
