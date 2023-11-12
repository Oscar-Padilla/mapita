<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelonsgTo;

class UserLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'location_id'
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function locations(){
        return $this->belongsTo(Location::class);
    }
}
