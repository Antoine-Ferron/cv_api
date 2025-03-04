<?php

namespace App\Enum;

/**
 * @method static FieldCategory ITLANGUAGE()
 */
enum FieldCategory: string
{
    case ITLANGUAGE = 'Langage informatique';
    case FRAMEWORK = 'Framework';
    case DATABASE = 'Base de données';
    case ENVIRONMENT = 'Environnement';
    case METHODS = 'Méthodes';
    case ORM = 'ORM';
    case LANGUAGE = 'Langues';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
