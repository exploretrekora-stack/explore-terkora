<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TravelStat extends Model
{
    /**
     * Cache key for active travel statistics singleton.
     */
    public const CACHE_KEY = 'travel_stats_current';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'travel_stats';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'happy_travelers',
        'average_rating',
        'years_of_experience',
        'team_members',
        'trips_completed',
        'verified_reviews',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'happy_travelers' => 'integer',
            'average_rating' => 'float',
            'years_of_experience' => 'integer',
            'team_members' => 'integer',
            'trips_completed' => 'integer',
            'verified_reviews' => 'integer',
        ];
    }

    /**
     * Bootstrap model events.
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
     * Get the current travel statistics record, cached for speed.
     */
    public static function current(): self
    {
        try {
            $data = Cache::rememberForever(self::CACHE_KEY, function () {
                $record = static::query()->first();

                if (! $record) {
                    $record = static::query()->create(static::defaultValues());
                }

                return $record->getAttributes();
            });

            if (! is_array($data)) {
                static::clearCache();
                $data = static::defaultValues();
            }

            $instance = new static;
            $instance->setRawAttributes($data, true);
            $instance->exists = ! empty($data['id']);

            return $instance;
        } catch (\Throwable) {
            return (new static)->forceFill(static::defaultValues());
        }
    }

    /**
     * Invalidate the statistics cache.
     */
    public static function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    /**
     * Default statistical values.
     *
     * @return array<string, int|float>
     */
    public static function defaultValues(): array
    {
        return [
            'happy_travelers' => 290,
            'average_rating' => 4.9,
            'years_of_experience' => 2,
            'team_members' => 4,
            'trips_completed' => 40,
            'verified_reviews' => 100,
        ];
    }

    /**
     * Formatted string for happy travelers (e.g. "290+").
     */
    public function getFormattedHappyTravelersAttribute(): string
    {
        return $this->happy_travelers.'+';
    }

    /**
     * Formatted string for average rating (e.g. "4.9 / 5").
     */
    public function getFormattedAverageRatingAttribute(): string
    {
        return number_format($this->average_rating, 1).' / 5';
    }

    /**
     * Formatted string for experience (e.g. "2+").
     */
    public function getFormattedExperienceAttribute(): string
    {
        return $this->years_of_experience.'+';
    }

    /**
     * Formatted string for trips completed (e.g. "40+").
     */
    public function getFormattedTripsAttribute(): string
    {
        return $this->trips_completed.'+';
    }

    /**
     * Formatted string for verified reviews (e.g. "100+").
     */
    public function getFormattedReviewsAttribute(): string
    {
        return $this->verified_reviews.'+';
    }
}
