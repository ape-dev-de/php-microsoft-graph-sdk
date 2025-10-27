<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArtifactRestoreStatus - Enum
 */
enum ArtifactRestoreStatus: string
{
    case ADDED = 'added';
    case SCHEDULING = 'scheduling';
    case SCHEDULED = 'scheduled';
    case INPROGRESS = 'inProgress';
    case SUCCEEDED = 'succeeded';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
