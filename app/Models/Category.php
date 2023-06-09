<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable =['name','icon'];
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
