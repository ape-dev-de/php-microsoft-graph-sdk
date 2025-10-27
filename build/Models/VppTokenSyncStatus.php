<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppTokenSyncStatus - Enum
 * Possible sync statuses associated with an Apple Volume Purchase Program token.
 */
enum VppTokenSyncStatus: string
{
    case NONE = 'none';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
}
