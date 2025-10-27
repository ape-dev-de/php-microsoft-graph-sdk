<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionOperationStatus - Enum
 */
enum IdentityGovernanceCustomTaskExtensionOperationStatus: string
{
    case COMPLETED = 'completed';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
