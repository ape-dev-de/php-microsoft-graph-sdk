<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleWorkflowProcessingStatus - Enum
 */
enum IdentityGovernanceLifecycleWorkflowProcessingStatus: string
{
    case QUEUED = 'queued';
    case INPROGRESS = 'inProgress';
    case COMPLETED = 'completed';
    case COMPLETEDWITHERRORS = 'completedWithErrors';
    case CANCELED = 'canceled';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
