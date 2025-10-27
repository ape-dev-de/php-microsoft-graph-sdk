<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipRequestAction - Enum
 */
enum DelegatedAdminRelationshipRequestAction: string
{
    case LOCKFORAPPROVAL = 'lockForApproval';
    case APPROVE = 'approve';
    case TERMINATE = 'terminate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case REJECT = 'reject';
}
