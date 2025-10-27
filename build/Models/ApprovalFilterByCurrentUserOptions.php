<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalFilterByCurrentUserOptions - Enum
 */
enum ApprovalFilterByCurrentUserOptions: string
{
    case TARGET = 'target';
    case CREATEDBY = 'createdBy';
    case APPROVER = 'approver';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
