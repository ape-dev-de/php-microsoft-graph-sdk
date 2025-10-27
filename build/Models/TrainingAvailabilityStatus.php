<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingAvailabilityStatus - Enum
 */
enum TrainingAvailabilityStatus: string
{
    case UNKNOWN = 'unknown';
    case NOTAVAILABLE = 'notAvailable';
    case AVAILABLE = 'available';
    case ARCHIVE = 'archive';
    case DELETE = 'delete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
