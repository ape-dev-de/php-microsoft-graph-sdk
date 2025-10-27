<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowExecutionType - Enum
 */
enum IdentityGovernanceWorkflowExecutionType: string
{
    case SCHEDULED = 'scheduled';
    case ONDEMAND = 'onDemand';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
