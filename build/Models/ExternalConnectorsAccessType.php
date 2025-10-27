<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsAccessType - Enum
 */
enum ExternalConnectorsAccessType: string
{
    case GRANT = 'grant';
    case DENY = 'deny';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
