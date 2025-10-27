<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestFilterByCurrentUserOptions - Enum
 */
enum AccessPackageAssignmentRequestFilterByCurrentUserOptions: string
{
    case TARGET = 'target';
    case CREATEDBY = 'createdBy';
    case APPROVER = 'approver';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
