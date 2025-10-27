<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FollowupFlagStatus - Enum
 */
enum FollowupFlagStatus: string
{
    case NOTFLAGGED = 'notFlagged';
    case COMPLETE = 'complete';
    case FLAGGED = 'flagged';
}
