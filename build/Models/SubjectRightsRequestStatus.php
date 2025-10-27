<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStatus - Enum
 */
enum SubjectRightsRequestStatus: string
{
    case ACTIVE = 'active';
    case CLOSED = 'closed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
