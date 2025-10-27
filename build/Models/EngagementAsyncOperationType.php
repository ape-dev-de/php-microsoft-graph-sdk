<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EngagementAsyncOperationType - Enum
 * Types of engagementAsyncOperationType. Members will be added here as more async operations are supported.
 */
enum EngagementAsyncOperationType: string
{
    case CREATECOMMUNITY = 'createCommunity';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
