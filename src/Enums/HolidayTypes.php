<?php

declare(strict_types=1);

namespace NagerDateSDK\Enums;

enum HolidayTypes: string
{
    case Authorities = 'Authorities';
    case Bank = 'Bank';
    case Observance = 'Observance';
    case Optional = 'Optional';
    case Public_ = 'Public';
    case School = 'School';
}
