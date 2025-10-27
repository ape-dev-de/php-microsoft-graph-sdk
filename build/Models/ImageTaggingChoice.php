<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImageTaggingChoice - Enum
 */
enum ImageTaggingChoice: string
{
    case DISABLED = 'disabled';
    case BASIC = 'basic';
    case ENHANCED = 'enhanced';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
