<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfileKind - Enum
 */
enum SecurityIntelligenceProfileKind: string
{
    case ACTOR = 'actor';
    case TOOL = 'tool';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
