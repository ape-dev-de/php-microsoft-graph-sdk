<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConnectionOperationStatus - Enum
 */
enum ExternalConnectorsConnectionOperationStatus: string
{
    case UNSPECIFIED = 'unspecified';
    case INPROGRESS = 'inprogress';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
