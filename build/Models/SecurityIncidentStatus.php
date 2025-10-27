<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIncidentStatus - Enum
 */
enum SecurityIncidentStatus: string
{
    case ACTIVE = 'active';
    case RESOLVED = 'resolved';
    case INPROGRESS = 'inProgress';
    case REDIRECTED = 'redirected';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case AWAITINGACTION = 'awaitingAction';
}
