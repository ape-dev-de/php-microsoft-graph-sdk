<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGoogleCloudLocationType - Enum
 */
enum SecurityGoogleCloudLocationType: string
{
    case UNKNOWN = 'unknown';
    case REGIONAL = 'regional';
    case ZONAL = 'zonal';
    case GLOBAL = 'global';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
