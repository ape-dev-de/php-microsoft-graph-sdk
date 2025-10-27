<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCatalogType - Enum
 */
enum AccessPackageCatalogType: string
{
    case USERMANAGED = 'userManaged';
    case SERVICEDEFAULT = 'serviceDefault';
    case SERVICEMANAGED = 'serviceManaged';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
