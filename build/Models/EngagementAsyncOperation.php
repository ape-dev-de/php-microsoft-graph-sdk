<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EngagementAsyncOperation
 */
class EngagementAsyncOperation
{
    public function __construct(
        /** The type of the long-running operation. The possible values are: createCommunity, unknownFutureValue. */
        public ?string $operationType = null,
        /** Represents the status of a Viva Engage async operation that is an operation that transcends the\nlifetime of a single API request. These operations are long-running or too expensive to complete\nwithin the time frame of their original request. */
        public ?string $resourceId = null
    ) {}
}
