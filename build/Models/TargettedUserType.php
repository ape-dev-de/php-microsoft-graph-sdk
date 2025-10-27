<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargettedUserType - Enum
 */
enum TargettedUserType: string
{
    case UNKNOWN = 'unknown';
    case CLICKED = 'clicked';
    case COMPROMISED = 'compromised';
    case ALLUSERS = 'allUsers';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
