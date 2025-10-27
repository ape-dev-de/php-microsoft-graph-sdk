<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceContainerStatus - Enum
 */
enum SecurityDataSourceContainerStatus: string
{
    case ACTIVE = 'active';
    case RELEASED = 'released';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
