<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleChangeState - Enum
 */
enum ScheduleChangeState: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case DECLINED = 'declined';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
