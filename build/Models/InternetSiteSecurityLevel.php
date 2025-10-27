<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetSiteSecurityLevel - Enum
 * Possible values for internet site security level.
 */
enum InternetSiteSecurityLevel: string
{
    case USERDEFINED = 'userDefined';
    case MEDIUM = 'medium';
    case MEDIUMHIGH = 'mediumHigh';
    case HIGH = 'high';
}
