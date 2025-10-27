<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageImportance - Enum
 */
enum ChatMessageImportance: string
{
    case NORMAL = 'normal';
    case HIGH = 'high';
    case URGENT = 'urgent';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
