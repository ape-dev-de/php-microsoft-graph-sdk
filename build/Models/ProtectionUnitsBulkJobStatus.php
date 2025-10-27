<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionUnitsBulkJobStatus - Enum
 */
enum ProtectionUnitsBulkJobStatus: string
{
    case UNKNOWN = 'unknown';
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
    case COMPLETEDWITHERRORS = 'completedWithErrors';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
