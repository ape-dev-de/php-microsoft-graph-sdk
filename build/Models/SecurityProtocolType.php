<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityProtocolType - Enum
 */
enum SecurityProtocolType: string
{
    case TCP = 'tcp';
    case UDP = 'udp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
