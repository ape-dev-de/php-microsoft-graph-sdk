<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InitiatorType - Enum
 */
enum InitiatorType: string
{
    case USER = 'user';
    case APPLICATION = 'application';
    case SYSTEM = 'system';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
