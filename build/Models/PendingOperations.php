<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingOperations
 */
class PendingOperations
{
    public function __construct(
        /** A property that indicates that an operation that might update the binary content of a file is pending completion. */
        public ?PendingContentUpdate $pendingContentUpdate = null
    ) {}
}
