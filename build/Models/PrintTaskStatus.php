<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskStatus
 */
class PrintTaskStatus
{
    public function __construct(
        /** A human-readable description of the current processing state of the printTask. */
        public ?string $description = null,
        /**  */
        public ?PrintTaskProcessingState $state = null
    ) {}
}
