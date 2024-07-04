<?php

namespace App\Models;

use App\Models\User;
use App\Models\RestaurantTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function restaurantTable():BelongsTo{
        return $this->belongsTo(RestaurantTable::class);
    }
}
