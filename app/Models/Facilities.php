<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    use HasFactory;
    protected $fillable = ['facilities_name', 'facilities_room'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
