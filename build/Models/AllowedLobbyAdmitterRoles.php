<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AllowedLobbyAdmitterRoles - Enum
 */
enum AllowedLobbyAdmitterRoles: string
{
    case ORGANIZERANDCOORGANIZERSANDPRESENTERS = 'organizerAndCoOrganizersAndPresenters';
    case ORGANIZERANDCOORGANIZERS = 'organizerAndCoOrganizers';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
