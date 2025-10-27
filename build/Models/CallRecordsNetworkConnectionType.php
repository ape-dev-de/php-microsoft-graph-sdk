<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsNetworkConnectionType - Enum
 */
enum CallRecordsNetworkConnectionType: string
{
    case UNKNOWN = 'unknown';
    case WIRED = 'wired';
    case WIFI = 'wifi';
    case MOBILE = 'mobile';
    case TUNNEL = 'tunnel';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
