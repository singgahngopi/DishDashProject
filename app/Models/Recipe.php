<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'source_url'];
    
    
    public function users()
{
    return $this->belongsToMany(User::class);
}


}

