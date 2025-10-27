<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicyState - Enum
 */
enum ConditionalAccessPolicyState: string
{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
    case ENABLEDFORREPORTINGBUTNOTENFORCED = 'enabledForReportingButNotEnforced';
}
