<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerState - Enum
 */
enum SearchAnswerState: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case EXCLUDED = 'excluded';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
