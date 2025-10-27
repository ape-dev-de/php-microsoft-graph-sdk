<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteSecurityLevel - Enum
 * Possible values for site security level.
 */
enum SiteSecurityLevel: string
{
    case USERDEFINED = 'userDefined';
    case LOW = 'low';
    case MEDIUMLOW = 'mediumLow';
    case MEDIUM = 'medium';
    case MEDIUMHIGH = 'mediumHigh';
    case HIGH = 'high';
}
