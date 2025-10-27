<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBillingPeriod - Enum
 */
enum PartnersBillingBillingPeriod: string
{
    case CURRENT = 'current';
    case LAST = 'last';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
