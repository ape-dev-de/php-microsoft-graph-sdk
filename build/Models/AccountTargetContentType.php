<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccountTargetContentType - Enum
 */
enum AccountTargetContentType: string
{
    case UNKNOWN = 'unknown';
    case INCLUDEALL = 'includeAll';
    case ADDRESSBOOK = 'addressBook';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
