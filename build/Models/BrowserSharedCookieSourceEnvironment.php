<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BrowserSharedCookieSourceEnvironment - Enum
 */
enum BrowserSharedCookieSourceEnvironment: string
{
    case MICROSOFTEDGE = 'microsoftEdge';
    case INTERNETEXPLORER11 = 'internetExplorer11';
    case BOTH = 'both';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
