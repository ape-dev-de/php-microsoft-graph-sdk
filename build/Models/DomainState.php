<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainState
 */
class DomainState
{
    public function __construct(
        /** Timestamp for when the last activity occurred. The value is updated when an operation is scheduled, the asynchronous task starts, and when the operation completes. */
        public ?\DateTimeInterface $lastActionDateTime = null,
        /** Type of asynchronous operation. The values can be ForceDelete or Verification. */
        public ?string $operation = null,
        /** Current status of the operation.  Scheduled - Operation is scheduled but hasn't started.  InProgress - Task is in progress.  Failed - The operation failed. */
        public ?string $status = null
    ) {}
}
