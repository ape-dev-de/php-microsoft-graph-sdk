<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStageStatus - Enum
 */
enum SubjectRightsRequestStageStatus: string
{
    case NOTSTARTED = 'notStarted';
    case CURRENT = 'current';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
