<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCaseOperationStatus - Enum
 */
enum SecurityCaseOperationStatus: string
{
    case NOTSTARTED = 'notStarted';
    case SUBMISSIONFAILED = 'submissionFailed';
    case RUNNING = 'running';
    case SUCCEEDED = 'succeeded';
    case PARTIALLYSUCCEEDED = 'partiallySucceeded';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
