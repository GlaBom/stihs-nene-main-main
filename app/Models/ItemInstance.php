<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInstance extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'status',
        'serial_number'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
