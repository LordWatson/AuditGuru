<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Framework extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    public function controls(): HasMany
    {
        return $this->hasMany(Control::class, 'framework_id');
    }

    public function assessments(): HasMany
    {
        return $this->hasMany(Assessment::class, 'framework_id');
    }

    public function auditReports(): HasMany
    {
        return $this->hasMany(AuditReport::class, 'framework_id');
    }
}
