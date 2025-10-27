<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndpointType - Enum
 */
enum EndpointType: string
{
    case DEFAULT = 'default';
    case VOICEMAIL = 'voicemail';
    case SKYPEFORBUSINESS = 'skypeForBusiness';
    case SKYPEFORBUSINESSVOIPPHONE = 'skypeForBusinessVoipPhone';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
