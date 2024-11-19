<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobOffer extends Model
{
    /** @use HasFactory<\Database\Factories\JobOfferFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'image',
        'benefits',
        'start_date',
        'end_date',
        'sector_id',
        'active',
    ];

    protected $appends = [
        'has_any_relation',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'active' => 'boolean',
        ];
    }

    public function sector(): BelongsTo
    {
        return $this->belongsTo(Sector::class);
    }

    public function requirements(): BelongsToMany
    {
        return $this->belongsToMany(Requirement::class, 'job_offer_requirement')
            ->withTimestamps();
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function isActive(): bool
    {
        return now()->between($this->start_date, $this->end_date);
    }

    public function getHasAnyRelationAttribute()
    {
        return $this->requirements()->count() > 0 || $this->applications()->count() > 0;
    }
}
