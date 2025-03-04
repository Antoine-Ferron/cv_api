<?php

namespace App\Enum;

/**
 * @method static ContractType CDI()
 */
enum ContractType: string
{
    case CDI = 'cdi';
    case CDD = 'cdd';
    case INTERIM = 'interim';
    case STAGE = 'stage';
    case ALTERNANCE = 'alternance';
    case FREELANCE = 'freelance';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
