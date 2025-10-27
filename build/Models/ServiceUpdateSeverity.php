<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateSeverity - Enum
 */
enum ServiceUpdateSeverity: string
{
    case NORMAL = 'normal';
    case HIGH = 'high';
    case CRITICAL = 'critical';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
