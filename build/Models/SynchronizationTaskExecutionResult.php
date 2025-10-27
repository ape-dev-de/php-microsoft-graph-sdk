<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTaskExecutionResult - Enum
 */
enum SynchronizationTaskExecutionResult: string
{
    case SUCCEEDED = 'Succeeded';
    case FAILED = 'Failed';
    case ENTRYLEVELERRORS = 'EntryLevelErrors';
}
