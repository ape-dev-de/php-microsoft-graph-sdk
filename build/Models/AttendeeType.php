<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeType - Enum
 */
enum AttendeeType: string
{
    case REQUIRED = 'required';
    case OPTIONAL = 'optional';
    case RESOURCE = 'resource';
}
