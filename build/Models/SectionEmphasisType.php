<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionEmphasisType - Enum
 */
enum SectionEmphasisType: string
{
    case NONE = 'none';
    case NEUTRAL = 'neutral';
    case SOFT = 'soft';
    case STRONG = 'strong';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
