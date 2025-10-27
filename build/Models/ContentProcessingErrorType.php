<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentProcessingErrorType - Enum
 */
enum ContentProcessingErrorType: string
{
    case TRANSIENT = 'transient';
    case PERMANENT = 'permanent';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
