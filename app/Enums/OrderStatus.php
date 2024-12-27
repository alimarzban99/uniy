<?php

namespace App\Enums;

enum OrderStatus: int implements IEnum
{
    use BaseEnumTrait;

    case NEW = 1;
    case ACCEPTED = 2;
    case DELIVERED = 3;
    case REJECTED = 4;

    public static function getPrefix(): string
    {
        return 'enums.order_status.';
    }
}
