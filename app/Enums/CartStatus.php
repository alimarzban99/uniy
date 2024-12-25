<?php

namespace App\Enums;

enum CartStatus: int implements IEnum
{
    use BaseEnumTrait;

    case NEW = 1;
    case FINAL = 2;

    public static function getPrefix(): string
    {
        return 'enums.cart_status.';
    }
}
