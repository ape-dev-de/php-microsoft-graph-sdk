<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserAction - Enum
 */
enum UserAction: string
{
    case REGISTERSECURITYINFORMATION = 'registerSecurityInformation';
    case REGISTERORJOINDEVICES = 'registerOrJoinDevices';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
