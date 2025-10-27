<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AllowInvitesFrom - Enum
 */
enum AllowInvitesFrom: string
{
    case NONE = 'none';
    case ADMINSANDGUESTINVITERS = 'adminsAndGuestInviters';
    case ADMINSGUESTINVITERSANDALLMEMBERS = 'adminsGuestInvitersAndAllMembers';
    case EVERYONE = 'everyone';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
