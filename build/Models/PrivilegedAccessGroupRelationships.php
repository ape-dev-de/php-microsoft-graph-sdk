<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupRelationships - Enum
 */
enum PrivilegedAccessGroupRelationships: string
{
    case OWNER = 'owner';
    case MEMBER = 'member';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
