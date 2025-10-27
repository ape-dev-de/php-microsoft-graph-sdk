<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationPhoneType - Enum
 */
enum AuthenticationPhoneType: string
{
    case MOBILE = 'mobile';
    case ALTERNATEMOBILE = 'alternateMobile';
    case OFFICE = 'office';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
