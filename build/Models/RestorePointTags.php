<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointTags - Enum
 */
enum RestorePointTags: string
{
    case NONE = 'none';
    case FASTRESTORE = 'fastRestore';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
