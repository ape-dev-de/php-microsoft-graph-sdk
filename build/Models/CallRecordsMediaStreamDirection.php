<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsMediaStreamDirection - Enum
 */
enum CallRecordsMediaStreamDirection: string
{
    case CALLERTOCALLEE = 'callerToCallee';
    case CALLEETOCALLER = 'calleeToCaller';
}
