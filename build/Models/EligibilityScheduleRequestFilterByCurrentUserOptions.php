<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EligibilityScheduleRequestFilterByCurrentUserOptions - Enum
 */
enum EligibilityScheduleRequestFilterByCurrentUserOptions: string
{
    case PRINCIPAL = 'principal';
    case CREATEDBY = 'createdBy';
    case APPROVER = 'approver';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
