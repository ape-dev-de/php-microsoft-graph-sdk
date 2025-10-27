<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeviceHealthStatus - Enum
 */
enum SecurityDeviceHealthStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case IMPAIREDCOMMUNICATION = 'impairedCommunication';
    case NOSENSORDATA = 'noSensorData';
    case NOSENSORDATAIMPAIREDCOMMUNICATION = 'noSensorDataImpairedCommunication';
    case UNKNOWN = 'unknown';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
