<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCaseType - Enum
 */
enum SecurityCaseType: string
{
    case STANDARD = 'standard';
    case PREMIUM = 'premium';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
