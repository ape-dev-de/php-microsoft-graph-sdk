<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Mutability - Enum
 */
enum Mutability: string
{
    case READWRITE = 'ReadWrite';
    case READONLY = 'ReadOnly';
    case IMMUTABLE = 'Immutable';
    case WRITEONLY = 'WriteOnly';
}
