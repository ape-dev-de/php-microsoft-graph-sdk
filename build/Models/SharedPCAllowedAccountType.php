<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCAllowedAccountType - Enum
 * Type of accounts that are allowed to share the PC.
 */
enum SharedPCAllowedAccountType: string
{
    case GUEST = 'guest';
    case DOMAIN = 'domain';
}
