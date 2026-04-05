<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'level', 'animation_order'];

    public function category()
    {
        return $this->belongsTo(SkillCategory::class, 'category_id');
    }
}
