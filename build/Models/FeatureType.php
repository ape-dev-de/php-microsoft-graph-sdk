<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureType - Enum
 */
enum FeatureType: string
{
    case REGISTRATION = 'registration';
    case RESET = 'reset';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
