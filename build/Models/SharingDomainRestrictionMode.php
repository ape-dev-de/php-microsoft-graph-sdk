<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingDomainRestrictionMode - Enum
 */
enum SharingDomainRestrictionMode: string
{
    case NONE = 'none';
    case ALLOWLIST = 'allowList';
    case BLOCKLIST = 'blockList';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
