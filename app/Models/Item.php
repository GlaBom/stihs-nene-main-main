<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'item_name',
        'item_description',
        'item_specification',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function itemInstances()
    {
        return $this->hasMany(ItemInstance::class);
    }
}
