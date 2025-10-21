<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RichLongRunningOperation
 */
class RichLongRunningOperation
{
    public function __construct(
        /** Error that caused the operation to fail. */
        public ?string $error = null,
        /** A value between 0 and 100 that indicates the progress of the operation. */
        public ?float $percentageComplete = null,
        /** The unique identifier for the result. */
        public ?string $resourceId = null,
        /** The status of a long-running operation. */
        public ?string $type = null
    ) {}
}
