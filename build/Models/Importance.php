<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Importance - Enum
 */
enum Importance: string
{
    case LOW = 'low';
    case NORMAL = 'normal';
    case HIGH = 'high';
}
