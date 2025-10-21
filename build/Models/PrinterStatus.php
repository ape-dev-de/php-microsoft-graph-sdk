<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterStatus
 */
class PrinterStatus
{
    public function __construct(
        /** A human-readable description of the printer's current processing state. Read-only. */
        public ?string $description = null,
        /** The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only. */
        public array $details = [],
        /**  */
        public ?PrinterProcessingState $state = null
    ) {}
}
