<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistryOperation - Enum
 */
enum RegistryOperation: string
{
    case UNKNOWN = 'unknown';
    case CREATE = 'create';
    case MODIFY = 'modify';
    case DELETE = 'delete';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
