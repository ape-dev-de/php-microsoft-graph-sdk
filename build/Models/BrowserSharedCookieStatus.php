<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookieStatus - Enum
 */
enum BrowserSharedCookieStatus: string
{
    case PUBLISHED = 'published';
    case PENDINGADD = 'pendingAdd';
    case PENDINGEDIT = 'pendingEdit';
    case PENDINGDELETE = 'pendingDelete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
