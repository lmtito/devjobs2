<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Requirement extends Model
{
    /** @use HasFactory<\Database\Factories\RequirementFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'requires_document',
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
            'requires_document' => 'boolean',
        ];
    }

    public function jobOffers(): BelongsToMany
    {
        return $this->belongsToMany(JobOffer::class, 'job_offer_requirements')
            ->withTimestamps();
    }

    public function getHasAnyRelationAttribute()
    {
        return false; //$this->jobOffers()->count() > 0;
    }
}
