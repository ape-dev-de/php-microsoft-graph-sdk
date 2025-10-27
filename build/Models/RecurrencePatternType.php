<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrencePatternType - Enum
 */
enum RecurrencePatternType: string
{
    case DAILY = 'daily';
    case WEEKLY = 'weekly';
    case ABSOLUTEMONTHLY = 'absoluteMonthly';
    case RELATIVEMONTHLY = 'relativeMonthly';
    case ABSOLUTEYEARLY = 'absoluteYearly';
    case RELATIVEYEARLY = 'relativeYearly';
}
