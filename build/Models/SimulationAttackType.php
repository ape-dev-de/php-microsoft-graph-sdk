<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAttackType - Enum
 */
enum SimulationAttackType: string
{
    case UNKNOWN = 'unknown';
    case SOCIAL = 'social';
    case CLOUD = 'cloud';
    case ENDPOINT = 'endpoint';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
