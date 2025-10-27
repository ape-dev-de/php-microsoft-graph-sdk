<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSiteListStatus - Enum
 */
enum BrowserSiteListStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case PENDING = 'pending';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
