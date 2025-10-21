<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingContentUpdate
 */
class PendingContentUpdate
{
    public function __construct(
        /** Date and time the pending binary operation was queued in UTC time. Read-only. */
        public ?\DateTimeInterface $queuedDateTime = null
    ) {}
}
