<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingRole - Enum
 */
enum OnlineMeetingRole: string
{
    case ATTENDEE = 'attendee';
    case PRESENTER = 'presenter';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case PRODUCER = 'producer';
    case COORGANIZER = 'coorganizer';
}
