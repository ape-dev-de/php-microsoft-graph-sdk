<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerStatus - Enum
 */
enum FileStorageContainerStatus: string
{
    case INACTIVE = 'inactive';
    case ACTIVE = 'active';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
