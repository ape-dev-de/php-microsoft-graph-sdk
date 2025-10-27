<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessTransferMethods - Enum
 */
enum ConditionalAccessTransferMethods: string
{
    case NONE = 'none';
    case DEVICECODEFLOW = 'deviceCodeFlow';
    case AUTHENTICATIONTRANSFER = 'authenticationTransfer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
