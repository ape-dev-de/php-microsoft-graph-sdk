<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentType - Enum
 */
enum PrivilegedAccessGroupAssignmentType: string
{
    case ASSIGNED = 'assigned';
    case ACTIVATED = 'activated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
