<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRuleType - Enum
 * Contains rule types for Win32 LOB apps.
 */
enum Win32LobAppRuleType: string
{
    case DETECTION = 'detection';
    case REQUIREMENT = 'requirement';
}
