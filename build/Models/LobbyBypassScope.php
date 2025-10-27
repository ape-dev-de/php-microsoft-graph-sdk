<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LobbyBypassScope - Enum
 */
enum LobbyBypassScope: string
{
    case ORGANIZER = 'organizer';
    case ORGANIZATION = 'organization';
    case ORGANIZATIONANDFEDERATED = 'organizationAndFederated';
    case EVERYONE = 'everyone';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case INVITED = 'invited';
    case ORGANIZATIONEXCLUDINGGUESTS = 'organizationExcludingGuests';
}
