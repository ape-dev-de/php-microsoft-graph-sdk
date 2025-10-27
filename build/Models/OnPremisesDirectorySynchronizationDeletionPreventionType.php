<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationDeletionPreventionType - Enum
 */
enum OnPremisesDirectorySynchronizationDeletionPreventionType: string
{
    case DISABLED = 'disabled';
    case ENABLEDFORCOUNT = 'enabledForCount';
    case ENABLEDFORPERCENTAGE = 'enabledForPercentage';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
