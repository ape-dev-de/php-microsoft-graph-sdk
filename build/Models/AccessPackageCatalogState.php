<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCatalogState - Enum
 */
enum AccessPackageCatalogState: string
{
    case UNPUBLISHED = 'unpublished';
    case PUBLISHED = 'published';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
