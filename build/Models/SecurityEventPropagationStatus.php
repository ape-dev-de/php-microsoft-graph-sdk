<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventPropagationStatus - Enum
 */
enum SecurityEventPropagationStatus: string
{
    case NONE = 'none';
    case INPROCESSING = 'inProcessing';
    case FAILED = 'failed';
    case SUCCESS = 'success';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
