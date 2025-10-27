<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConnectionState - Enum
 */
enum ExternalConnectorsConnectionState: string
{
    case DRAFT = 'draft';
    case READY = 'ready';
    case OBSOLETE = 'obsolete';
    case LIMITEXCEEDED = 'limitExceeded';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
