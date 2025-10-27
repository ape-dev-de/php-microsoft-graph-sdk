<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationUserActionTypes - Enum
 */
enum ChatMessagePolicyViolationUserActionTypes: string
{
    case NONE = 'none';
    case OVERRIDE = 'override';
    case REPORTFALSEPOSITIVE = 'reportFalsePositive';
}
