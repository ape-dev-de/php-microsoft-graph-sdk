<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAsyncOperationStatus - Enum
 */
enum TeamsAsyncOperationStatus: string
{
    case INVALID = 'invalid';
    case NOTSTARTED = 'notStarted';
    case INPROGRESS = 'inProgress';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
