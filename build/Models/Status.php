<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Status - Enum
 */
enum Status: string
{
    case ACTIVE = 'active';
    case UPDATED = 'updated';
    case DELETED = 'deleted';
    case IGNORED = 'ignored';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
