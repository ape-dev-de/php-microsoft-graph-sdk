<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataPolicyOperationStatus - Enum
 */
enum DataPolicyOperationStatus: string
{
    case NOTSTARTED = 'notStarted';
    case RUNNING = 'running';
    case COMPLETE = 'complete';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
