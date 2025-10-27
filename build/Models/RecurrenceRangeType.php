<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecurrenceRangeType - Enum
 */
enum RecurrenceRangeType: string
{
    case ENDDATE = 'endDate';
    case NOEND = 'noEnd';
    case NUMBERED = 'numbered';
}
