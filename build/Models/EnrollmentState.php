<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentState - Enum
 */
enum EnrollmentState: string
{
    case UNKNOWN = 'unknown';
    case ENROLLED = 'enrolled';
    case PENDINGRESET = 'pendingReset';
    case FAILED = 'failed';
    case NOTCONTACTED = 'notContacted';
}
