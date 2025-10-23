<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingContentUpdate
 */
class PendingContentUpdate
{
    /** Date and time the pending binary operation was queued in UTC time. Read-only. */
    public ?\DateTimeInterface $queuedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['queuedDateTime'])) {
            $this->queuedDateTime = $data['queuedDateTime'];
        }
    }
}
