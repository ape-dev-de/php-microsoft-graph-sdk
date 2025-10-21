<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Operation
 */
class Operation
{
    public function __construct(
        /** The start time of the operation. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The time of the last action of the operation. */
        public ?\DateTimeInterface $lastActionDateTime = null,
        /** The current status of the operation: notStarted, running, completed, failed */
        public ?string $status = null
    ) {}
}
