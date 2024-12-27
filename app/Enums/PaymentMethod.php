<?php

namespace App\Enums;

enum PaymentMethod: int implements IEnum
{
    use BaseEnumTrait;

    case CASH = 1;
    case ONLINE = 2;

    public static function getPrefix(): string
    {
        return 'enums.payment_methods.';
    }
}
