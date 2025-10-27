<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerContainerType - Enum
 */
enum PlannerContainerType: string
{
    case GROUP = 'group';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ROSTER = 'roster';
}
