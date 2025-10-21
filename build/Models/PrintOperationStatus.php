<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperationStatus
 */
class PrintOperationStatus
{
    public function __construct(
        /** A human-readable description of the printOperation's current processing state. Read-only. */
        public ?string $description = null,
        /**  */
        public ?PrintOperationProcessingState $state = null
    ) {}
}
