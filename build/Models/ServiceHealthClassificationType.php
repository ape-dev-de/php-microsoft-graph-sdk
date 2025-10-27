<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthClassificationType - Enum
 */
enum ServiceHealthClassificationType: string
{
    case ADVISORY = 'advisory';
    case INCIDENT = 'incident';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
