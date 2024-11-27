<?php

namespace App\Enums;

enum Status: int implements IEnum
{
    use BaseEnumTrait;

    case PUBLISHED = 1;
    case INACTIVATED = 2;
    case DRAFTED = 3;
    case ARCHIVED = 4;

    public static function getPrefix(): string
    {
        return 'enums.status.';
    }
}
