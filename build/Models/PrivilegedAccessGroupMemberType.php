<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupMemberType - Enum
 */
enum PrivilegedAccessGroupMemberType: string
{
    case DIRECT = 'direct';
    case GROUP = 'group';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
