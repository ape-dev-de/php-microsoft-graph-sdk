<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionScopeState - Enum
 */
enum ProtectionScopeState: string
{
    case NOTMODIFIED = 'notModified';
    case MODIFIED = 'modified';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
