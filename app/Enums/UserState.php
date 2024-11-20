<?php

namespace App\Enums;

enum UserState: string
{
    case PENDING = 'PENDING';
    case ACTIVED = 'ACTIVED';
    case DISABLED = 'DISABLED';
    case REMOVED = 'REMOVED';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
