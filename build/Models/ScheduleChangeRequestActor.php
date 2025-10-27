<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleChangeRequestActor - Enum
 */
enum ScheduleChangeRequestActor: string
{
    case SENDER = 'sender';
    case RECIPIENT = 'recipient';
    case MANAGER = 'manager';
    case SYSTEM = 'system';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
