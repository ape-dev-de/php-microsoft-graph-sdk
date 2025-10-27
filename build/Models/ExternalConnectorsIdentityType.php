<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsIdentityType - Enum
 */
enum ExternalConnectorsIdentityType: string
{
    case USER = 'user';
    case GROUP = 'group';
    case EXTERNALGROUP = 'externalGroup';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
