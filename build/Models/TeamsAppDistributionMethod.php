<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppDistributionMethod - Enum
 */
enum TeamsAppDistributionMethod: string
{
    case STORE = 'store';
    case ORGANIZATION = 'organization';
    case SIDELOADED = 'sideloaded';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
