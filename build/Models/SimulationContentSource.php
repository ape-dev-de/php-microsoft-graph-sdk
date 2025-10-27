<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationContentSource - Enum
 */
enum SimulationContentSource: string
{
    case UNKNOWN = 'unknown';
    case GLOBAL = 'global';
    case TENANT = 'tenant';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
