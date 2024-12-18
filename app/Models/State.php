<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory; 
    
    protected $fillable=[
        'name',

    ];
    public function cities():HasMany{
        return $this->hasMany(City::class);
    }
    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }


    
}
