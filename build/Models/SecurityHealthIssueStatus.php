<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssueStatus - Enum
 */
enum SecurityHealthIssueStatus: string
{
    case OPEN = 'open';
    case CLOSED = 'closed';
    case SUPPRESSED = 'suppressed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
