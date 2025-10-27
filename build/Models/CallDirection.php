<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallDirection - Enum
 */
enum CallDirection: string
{
    case INCOMING = 'incoming';
    case OUTGOING = 'outgoing';
}
