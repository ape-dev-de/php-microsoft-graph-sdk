<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRuleOperator - Enum
 * Contains properties for detection operator.
 */
enum Win32LobAppRuleOperator: string
{
    case NOTCONFIGURED = 'notConfigured';
    case EQUAL = 'equal';
    case NOTEQUAL = 'notEqual';
    case GREATERTHAN = 'greaterThan';
    case GREATERTHANOREQUAL = 'greaterThanOrEqual';
    case LESSTHAN = 'lessThan';
    case LESSTHANOREQUAL = 'lessThanOrEqual';
}
