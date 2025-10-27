<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptionState - Enum
 */
enum CallTranscriptionState: string
{
    case NOTSTARTED = 'notStarted';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
