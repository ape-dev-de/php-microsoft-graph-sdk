<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileDefaultAppPermissionPolicyType - Enum
 * Android Work Profile default app permission policy type.
 */
enum AndroidWorkProfileDefaultAppPermissionPolicyType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case PROMPT = 'prompt';
    case AUTOGRANT = 'autoGrant';
    case AUTODENY = 'autoDeny';
}
