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
        'discount',
        'score',
        'image',
        'status',
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
            'discount' => 'int',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getDiscountedPriceAttribute(): int
    {
        if ($this->attributes['discount'] > 0) {
            return $this->attributes['price'] - ($this->attributes['price'] * ($this->attributes['discount'] / 100));
        }

        return 0;

    }
}
