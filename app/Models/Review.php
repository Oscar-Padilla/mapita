<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'rating',
        'comment',
        'user_id',
        'location_id'
    ];
    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function locations(): BelongsTo{
        return $this->belongsTo(Location::class);
    }
}
