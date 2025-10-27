<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityQueryType - Enum
 */
enum SecurityQueryType: string
{
    case FILES = 'files';
    case MESSAGES = 'messages';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
