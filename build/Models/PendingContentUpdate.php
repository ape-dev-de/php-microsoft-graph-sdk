<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingContentUpdate
 */
class PendingContentUpdate
{
    /**
     * Date and time the pending binary operation was queued in UTC time. Read-only.
     */
    private ?\DateTimeInterface $queuedDateTime;

    public function getQueuedDateTime(): ?\DateTimeInterface
    {
        return $this->queuedDateTime;
    }

    public function setQueuedDateTime(?\DateTimeInterface $queuedDateTime): self
    {
        $this->queuedDateTime = $queuedDateTime;
        return $this;
    }

}
