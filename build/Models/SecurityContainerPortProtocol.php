<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerPortProtocol - Enum
 */
enum SecurityContainerPortProtocol: string
{
    case UDP = 'udp';
    case TCP = 'tcp';
    case SCTP = 'sctp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
