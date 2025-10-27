<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteLockState - Enum
 */
enum SiteLockState: string
{
    case UNLOCKED = 'unlocked';
    case LOCKEDREADONLY = 'lockedReadOnly';
    case LOCKEDNOACCESS = 'lockedNoAccess';
    case LOCKEDNOADDITIONS = 'lockedNoAdditions';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
