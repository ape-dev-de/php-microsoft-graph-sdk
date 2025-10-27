<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditActivityOperationType - Enum
 */
enum CloudPcAuditActivityOperationType: string
{
    case CREATE = 'create';
    case DELETE = 'delete';
    case PATCH = 'patch';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
