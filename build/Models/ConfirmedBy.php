<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfirmedBy - Enum
 */
enum ConfirmedBy: string
{
    case NONE = 'none';
    case USER = 'user';
    case MANAGER = 'manager';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
