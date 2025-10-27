<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsProductFamily - Enum
 */
enum CallRecordsProductFamily: string
{
    case UNKNOWN = 'unknown';
    case TEAMS = 'teams';
    case SKYPEFORBUSINESS = 'skypeForBusiness';
    case LYNC = 'lync';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case AZURECOMMUNICATIONSERVICES = 'azureCommunicationServices';
}
