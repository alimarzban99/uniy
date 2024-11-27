<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'discounted_price',
        'score',
        'image',
        'status',
        'weight',
        'is_featured',
    ];

    /**
     * @return string[]
     */
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'price' => 'int',
            'discounted_price' => 'int',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
