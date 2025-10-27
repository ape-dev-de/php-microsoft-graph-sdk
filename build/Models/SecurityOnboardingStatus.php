<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityOnboardingStatus - Enum
 */
enum SecurityOnboardingStatus: string
{
    case INSUFFICIENTINFO = 'insufficientInfo';
    case ONBOARDED = 'onboarded';
    case CANBEONBOARDED = 'canBeOnboarded';
    case UNSUPPORTED = 'unsupported';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
