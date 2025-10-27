<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContactRelationship - Enum
 */
enum ContactRelationship: string
{
    case PARENT = 'parent';
    case RELATIVE = 'relative';
    case AIDE = 'aide';
    case DOCTOR = 'doctor';
    case GUARDIAN = 'guardian';
    case CHILD = 'child';
    case OTHER = 'other';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
