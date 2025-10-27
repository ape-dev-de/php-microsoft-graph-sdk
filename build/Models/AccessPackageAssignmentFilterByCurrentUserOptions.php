<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentFilterByCurrentUserOptions - Enum
 */
enum AccessPackageAssignmentFilterByCurrentUserOptions: string
{
    case TARGET = 'target';
    case CREATEDBY = 'createdBy';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
