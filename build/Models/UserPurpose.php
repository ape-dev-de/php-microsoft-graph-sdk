<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserPurpose - Enum
 */
enum UserPurpose: string
{
    case USER = 'user';
    case LINKED = 'linked';
    case SHARED = 'shared';
    case ROOM = 'room';
    case EQUIPMENT = 'equipment';
    case OTHERS = 'others';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
