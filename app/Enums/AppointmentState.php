<?php

namespace App\Enums;

enum AppointmentState: string
{
    case PENDING = 'PENDING';
    case CONFIRMED = 'CONFIRMED';
    case COMPLETED = 'COMPLETED';
    case CANCELLED = 'CANCELLED';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
