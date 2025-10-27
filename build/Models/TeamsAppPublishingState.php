<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppPublishingState - Enum
 */
enum TeamsAppPublishingState: string
{
    case SUBMITTED = 'submitted';
    case REJECTED = 'rejected';
    case PUBLISHED = 'published';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
