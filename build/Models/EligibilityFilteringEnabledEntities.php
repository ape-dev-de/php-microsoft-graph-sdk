<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EligibilityFilteringEnabledEntities - Enum
 */
enum EligibilityFilteringEnabledEntities: string
{
    case NONE = 'none';
    case SWAPREQUEST = 'swapRequest';
    case OFFERSHIFTREQUEST = 'offerShiftRequest';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case TIMEOFFREASON = 'timeOffReason';
}
