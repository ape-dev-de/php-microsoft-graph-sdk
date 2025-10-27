<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnectionStatus - Enum
 */
enum CloudPcOnPremisesConnectionStatus: string
{
    case PENDING = 'pending';
    case RUNNING = 'running';
    case PASSED = 'passed';
    case FAILED = 'failed';
    case WARNING = 'warning';
    case INFORMATIONAL = 'informational';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
