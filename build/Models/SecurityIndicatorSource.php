<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicatorSource - Enum
 */
enum SecurityIndicatorSource: string
{
    case MICROSOFT = 'microsoft';
    case OSINT = 'osint';
    case PUBLIC = 'public';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
