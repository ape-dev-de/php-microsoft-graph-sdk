<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserAccountSecurityType - Enum
 */
enum UserAccountSecurityType: string
{
    case UNKNOWN = 'unknown';
    case STANDARD = 'standard';
    case POWER = 'power';
    case ADMINISTRATOR = 'administrator';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
