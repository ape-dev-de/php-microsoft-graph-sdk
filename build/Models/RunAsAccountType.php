<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RunAsAccountType - Enum
 * Indicates the type of execution context the app runs in.
 */
enum RunAsAccountType: string
{
    case SYSTEM = 'system';
    case USER = 'user';
}
