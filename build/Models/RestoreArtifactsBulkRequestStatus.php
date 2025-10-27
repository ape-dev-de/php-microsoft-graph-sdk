<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreArtifactsBulkRequestStatus - Enum
 */
enum RestoreArtifactsBulkRequestStatus: string
{
    case UNKNOWN = 'unknown';
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
    case COMPLETEDWITHERRORS = 'completedWithErrors';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
