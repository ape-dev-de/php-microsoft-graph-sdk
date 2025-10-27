<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationDisposition - Enum
 */
enum SynchronizationDisposition: string
{
    case NORMAL = 'Normal';
    case DISCARD = 'Discard';
    case ESCROW = 'Escrow';
}
