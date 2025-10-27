<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestoreSessionStatus - Enum
 */
enum RestoreSessionStatus: string
{
    case DRAFT = 'draft';
    case ACTIVATING = 'activating';
    case ACTIVE = 'active';
    case COMPLETEDWITHERROR = 'completedWithError';
    case COMPLETED = 'completed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case FAILED = 'failed';
}
