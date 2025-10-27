<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyRuleTargetOperations - Enum
 */
enum UnifiedRoleManagementPolicyRuleTargetOperations: string
{
    case ALL = 'all';
    case ACTIVATE = 'activate';
    case DEACTIVATE = 'deactivate';
    case ASSIGN = 'assign';
    case UPDATE = 'update';
    case REMOVE = 'remove';
    case EXTEND = 'extend';
    case RENEW = 'renew';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
