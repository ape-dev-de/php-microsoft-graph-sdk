<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPortProtocol - Enum
 */
enum SecurityHostPortProtocol: string
{
    case TCP = 'tcp';
    case UDP = 'udp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
