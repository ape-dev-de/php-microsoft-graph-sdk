<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Sensitivity - Enum
 */
enum Sensitivity: string
{
    case NORMAL = 'normal';
    case PERSONAL = 'personal';
    case PRIVATE = 'private';
    case CONFIDENTIAL = 'confidential';
}
