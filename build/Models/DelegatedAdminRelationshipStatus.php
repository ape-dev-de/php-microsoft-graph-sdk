<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipStatus - Enum
 */
enum DelegatedAdminRelationshipStatus: string
{
    case ACTIVATING = 'activating';
    case ACTIVE = 'active';
    case APPROVALPENDING = 'approvalPending';
    case APPROVED = 'approved';
    case CREATED = 'created';
    case EXPIRED = 'expired';
    case EXPIRING = 'expiring';
    case TERMINATED = 'terminated';
    case TERMINATING = 'terminating';
    case TERMINATIONREQUESTED = 'terminationRequested';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
