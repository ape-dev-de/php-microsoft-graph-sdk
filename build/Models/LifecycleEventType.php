<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LifecycleEventType - Enum
 */
enum LifecycleEventType: string
{
    case MISSED = 'missed';
    case SUBSCRIPTIONREMOVED = 'subscriptionRemoved';
    case REAUTHORIZATIONREQUIRED = 'reauthorizationRequired';
}
