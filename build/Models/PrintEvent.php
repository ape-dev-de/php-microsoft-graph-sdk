<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintEvent - Enum
 */
enum PrintEvent: string
{
    case JOBSTARTED = 'jobStarted';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
