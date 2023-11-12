<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelonsgToMany;
use Illuminate\Database\Eloquent\Relations\BelonsgTo;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'address',
        'description',
        'category_id'
    ];
    public function reviews(): hasMany{
        return $this->hasMany(Review::class);
    }
    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'user_locations');
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }

}
