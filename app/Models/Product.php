<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    use HasFactory;
    
    protected $guarded = [];

    public const AVAILABLE = 'available';
    public const UNAVAILABLE = 'unavailable';

    public function scopeStatus($query)
    {
        return $query->whereStatus($query);
    }

}
