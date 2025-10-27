<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityPurgeAreas - Enum
 */
enum SecurityPurgeAreas: string
{
    case MAILBOXES = 'mailboxes';
    case TEAMSMESSAGES = 'teamsMessages';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
