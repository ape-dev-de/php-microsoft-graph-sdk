<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CourseStatus - Enum
 */
enum CourseStatus: string
{
    case NOTSTARTED = 'notStarted';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
