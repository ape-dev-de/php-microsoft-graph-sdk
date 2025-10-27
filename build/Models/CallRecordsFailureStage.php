<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsFailureStage - Enum
 */
enum CallRecordsFailureStage: string
{
    case UNKNOWN = 'unknown';
    case CALLSETUP = 'callSetup';
    case MIDCALL = 'midcall';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
