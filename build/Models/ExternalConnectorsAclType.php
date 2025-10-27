<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsAclType - Enum
 */
enum ExternalConnectorsAclType: string
{
    case USER = 'user';
    case GROUP = 'group';
    case EVERYONE = 'everyone';
    case EVERYONEEXCEPTGUESTS = 'everyoneExceptGuests';
    case EXTERNALGROUP = 'externalGroup';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
