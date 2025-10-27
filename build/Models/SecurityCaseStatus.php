<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCaseStatus - Enum
 */
enum SecurityCaseStatus: string
{
    case UNKNOWN = 'unknown';
    case ACTIVE = 'active';
    case PENDINGDELETE = 'pendingDelete';
    case CLOSING = 'closing';
    case CLOSED = 'closed';
    case CLOSEDWITHERROR = 'closedWithError';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
