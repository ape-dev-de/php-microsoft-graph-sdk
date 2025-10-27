<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileThreatPartnerTenantState - Enum
 * Partner state of this tenant.
 */
enum MobileThreatPartnerTenantState: string
{
    case UNAVAILABLE = 'unavailable';
    case AVAILABLE = 'available';
    case ENABLED = 'enabled';
    case UNRESPONSIVE = 'unresponsive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
