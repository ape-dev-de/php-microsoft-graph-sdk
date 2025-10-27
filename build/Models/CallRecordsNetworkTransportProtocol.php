<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsNetworkTransportProtocol - Enum
 */
enum CallRecordsNetworkTransportProtocol: string
{
    case UNKNOWN = 'unknown';
    case UDP = 'udp';
    case TCP = 'tcp';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
