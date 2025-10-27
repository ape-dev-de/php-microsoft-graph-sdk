<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessAssignmentStatus - Enum
 */
enum DelegatedAdminAccessAssignmentStatus: string
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case DELETING = 'deleting';
    case DELETED = 'deleted';
    case ERROR = 'error';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
