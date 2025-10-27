<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingStatus - Enum
 */
enum TrainingStatus: string
{
    case UNKNOWN = 'unknown';
    case ASSIGNED = 'assigned';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case OVERDUE = 'overdue';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
