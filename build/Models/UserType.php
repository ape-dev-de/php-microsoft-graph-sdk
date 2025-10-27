<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserType - Enum
 */
enum UserType: string
{
    case MEMBER = 'member';
    case GUEST = 'guest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
