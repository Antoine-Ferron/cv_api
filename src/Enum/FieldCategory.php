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
}
