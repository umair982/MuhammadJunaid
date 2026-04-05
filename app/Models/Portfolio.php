<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $casts = [
        'tags' => 'array',
    ];
    protected $fillable = ['title', 'category_id', 'tags','image','url'];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
