<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'date_of_birth',
        // Add any other relevant attributes
    ];

    // Define relationships if needed
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    // Add relationships for health records and training sessions
    public function healthRecords()
    {
        return $this->hasMany(HealthRecord::class);
    }

    public function trainingSessions()
    {
        return $this->hasMany(TrainingSession::class);
    }
}
