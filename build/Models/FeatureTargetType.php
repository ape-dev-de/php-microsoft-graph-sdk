<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureTargetType - Enum
 */
enum FeatureTargetType: string
{
    case GROUP = 'group';
    case ADMINISTRATIVEUNIT = 'administrativeUnit';
    case ROLE = 'role';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
