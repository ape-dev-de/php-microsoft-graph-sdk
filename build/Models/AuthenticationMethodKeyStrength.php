<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodKeyStrength - Enum
 */
enum AuthenticationMethodKeyStrength: string
{
    case NORMAL = 'normal';
    case WEAK = 'weak';
    case UNKNOWN = 'unknown';
}
