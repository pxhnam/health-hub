<?php

namespace App\Enums;

enum UserRole: string
{
    case USER = 'USER';
    case DOCTOR = 'DOCTOR';
    case ADMIN = 'ADMIN';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
