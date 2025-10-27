<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowTriggerTimeBasedAttribute - Enum
 */
enum IdentityGovernanceWorkflowTriggerTimeBasedAttribute: string
{
    case EMPLOYEEHIREDATE = 'employeeHireDate';
    case EMPLOYEELEAVEDATETIME = 'employeeLeaveDateTime';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case CREATEDDATETIME = 'createdDateTime';
}
