<?php

namespace App\Enum;

enum ContractType: string
{
    case CDI = 'cdi';
    case CDD = 'cdd';
    case INTERIM = 'interim';
    case STAGE = 'stage';
    case ALTERNANCE = 'alternance';
    case FREELANCE = 'freelance';
}

