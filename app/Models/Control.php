<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Control extends Model
{
    protected $fillable = [
        'framework_id',
        'control_code',
        'description'
    ];

    public function framework(): BelongsTo
    {
        return $this->belongsTo(Framework::class, 'framework_id');
    }

    public function responses(): HasMany
    {
        return $this->hasMany(AssessmentResponse::class, 'control_id');
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class, 'control_id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(ControlQuestion::class, 'control_id');
    }
}
