<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'category_id'
    ];

    public function userId(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    }

    public function categoryId(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');

    }

}
