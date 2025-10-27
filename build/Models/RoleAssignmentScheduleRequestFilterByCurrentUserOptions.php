<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleAssignmentScheduleRequestFilterByCurrentUserOptions - Enum
 */
enum RoleAssignmentScheduleRequestFilterByCurrentUserOptions: string
{
    case PRINCIPAL = 'principal';
    case CREATEDBY = 'createdBy';
    case APPROVER = 'approver';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
