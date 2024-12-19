<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{

    use HasFactory; 
    
    protected $fillable=[
        'cityName',
        'state_id'
    ];
    public function states():BelongsTo{
        return $this->belongsTo(State::class);
    }
}
