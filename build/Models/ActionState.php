<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActionState - Enum
 * State of the action on the device
 */
enum ActionState: string
{
    case NONE = 'none';
    case PENDING = 'pending';
    case CANCELED = 'canceled';
    case ACTIVE = 'active';
    case DONE = 'done';
    case FAILED = 'failed';
    case NOTSUPPORTED = 'notSupported';
}
