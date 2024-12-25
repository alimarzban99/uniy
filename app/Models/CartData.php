<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartData extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'total',
        'status',
    ];


    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class, 'cart_id', 'id');
    }
}
