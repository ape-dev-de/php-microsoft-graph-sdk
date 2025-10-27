<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcRestorePointFrequencyType - Enum
 */
enum CloudPcRestorePointFrequencyType: string
{
    case DEFAULT = 'default';
    case FOURHOURS = 'fourHours';
    case SIXHOURS = 'sixHours';
    case TWELVEHOURS = 'twelveHours';
    case SIXTEENHOURS = 'sixteenHours';
    case TWENTYFOURHOURS = 'twentyFourHours';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
