<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperationResult - Enum
 */
enum OperationResult: string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
    case TIMEOUT = 'timeout';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
