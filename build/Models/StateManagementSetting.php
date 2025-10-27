<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StateManagementSetting - Enum
 * State Management Setting.
 */
enum StateManagementSetting: string
{
    case NOTCONFIGURED = 'notConfigured';
    case BLOCKED = 'blocked';
    case ALLOWED = 'allowed';
}
