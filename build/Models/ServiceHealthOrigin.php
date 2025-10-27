<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthOrigin - Enum
 */
enum ServiceHealthOrigin: string
{
    case MICROSOFT = 'microsoft';
    case THIRDPARTY = 'thirdParty';
    case CUSTOMER = 'customer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
