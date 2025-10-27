<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointPreference - Enum
 */
enum RestorePointPreference: string
{
    case LATEST = 'latest';
    case OLDEST = 'oldest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
