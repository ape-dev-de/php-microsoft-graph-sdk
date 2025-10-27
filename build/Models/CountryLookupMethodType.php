<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CountryLookupMethodType - Enum
 */
enum CountryLookupMethodType: string
{
    case CLIENTIPADDRESS = 'clientIpAddress';
    case AUTHENTICATORAPPGPS = 'authenticatorAppGps';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
