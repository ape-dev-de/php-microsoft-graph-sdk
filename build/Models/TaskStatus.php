<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TaskStatus - Enum
 */
enum TaskStatus: string
{
    case NOTSTARTED = 'notStarted';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case WAITINGONOTHERS = 'waitingOnOthers';
    case DEFERRED = 'deferred';
}
