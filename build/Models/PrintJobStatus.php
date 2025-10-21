<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobStatus
 */
class PrintJobStatus
{
    public function __construct(
        /** A human-readable description of the print job's current processing state. Read-only. */
        public ?string $description = null,
        /** Additional details for print job state. Valid values are described in the following table. Read-only. */
        public array $details = [],
        /** True if the job was acknowledged by a printer; false otherwise. Read-only. */
        public ?bool $isAcquiredByPrinter = null,
        /**  */
        public ?PrintJobProcessingState $state = null
    ) {}
}
