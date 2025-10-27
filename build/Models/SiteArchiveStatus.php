<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteArchiveStatus - Enum
 */
enum SiteArchiveStatus: string
{
    case RECENTLYARCHIVED = 'recentlyArchived';
    case FULLYARCHIVED = 'fullyArchived';
    case REACTIVATING = 'reactivating';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
