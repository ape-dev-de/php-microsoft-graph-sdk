<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncludedUserTypes - Enum
 */
enum IncludedUserTypes: string
{
    case ALL = 'all';
    case MEMBER = 'member';
    case GUEST = 'guest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
