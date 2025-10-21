<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTask
 */
class PrintTask
{
    public function __construct(
        /** The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/v1.0/print/printers/{printerId}/jobs/{jobId}. Read-only. */
        public ?string $parentUrl = null,
        /**  */
        public ?string $status = null,
        /**  */
        public ?string $definition = null,
        /**  */
        public ?string $trigger = null
    ) {}
}
