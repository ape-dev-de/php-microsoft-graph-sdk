<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningAction - Enum
 */
enum ProvisioningAction: string
{
    case OTHER = 'other';
    case CREATE = 'create';
    case DELETE = 'delete';
    case DISABLE = 'disable';
    case UPDATE = 'update';
    case STAGEDDELETE = 'stagedDelete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
