<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDetectionStatus - Enum
 */
enum SecurityDetectionStatus: string
{
    case DETECTED = 'detected';
    case BLOCKED = 'blocked';
    case PREVENTED = 'prevented';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
