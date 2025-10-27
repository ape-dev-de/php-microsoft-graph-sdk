<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolationVerdictDetailsTypes - Enum
 */
enum ChatMessagePolicyViolationVerdictDetailsTypes: string
{
    case NONE = 'none';
    case ALLOWFALSEPOSITIVEOVERRIDE = 'allowFalsePositiveOverride';
    case ALLOWOVERRIDEWITHOUTJUSTIFICATION = 'allowOverrideWithoutJustification';
    case ALLOWOVERRIDEWITHJUSTIFICATION = 'allowOverrideWithJustification';
}
