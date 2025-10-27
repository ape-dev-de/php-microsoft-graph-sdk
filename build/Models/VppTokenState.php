<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppTokenState - Enum
 * Possible states associated with an Apple Volume Purchase Program token.
 */
enum VppTokenState: string
{
    case UNKNOWN = 'unknown';
    case VALID = 'valid';
    case EXPIRED = 'expired';
    case INVALID = 'invalid';
    case ASSIGNEDTOEXTERNALMDM = 'assignedToExternalMDM';
}
