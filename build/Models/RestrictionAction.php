<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestrictionAction - Enum
 */
enum RestrictionAction: string
{
    case WARN = 'warn';
    case AUDIT = 'audit';
    case BLOCK = 'block';
}
