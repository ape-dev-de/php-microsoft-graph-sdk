<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DisableReason - Enum
 */
enum DisableReason: string
{
    case NONE = 'none';
    case INVALIDBILLINGPROFILE = 'invalidBillingProfile';
    case USERREQUESTED = 'userRequested';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
