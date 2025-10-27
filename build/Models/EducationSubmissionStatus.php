<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionStatus - Enum
 */
enum EducationSubmissionStatus: string
{
    case WORKING = 'working';
    case SUBMITTED = 'submitted';
    case RELEASED = 'released';
    case RETURNED = 'returned';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case REASSIGNED = 'reassigned';
    case EXCUSED = 'excused';
}
