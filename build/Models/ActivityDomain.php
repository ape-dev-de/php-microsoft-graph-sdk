<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityDomain - Enum
 */
enum ActivityDomain: string
{
    case UNKNOWN = 'unknown';
    case WORK = 'work';
    case PERSONAL = 'personal';
    case UNRESTRICTED = 'unrestricted';
}
