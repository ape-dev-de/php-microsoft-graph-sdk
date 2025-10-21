<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageUnpinnedEventMessageDetail
 */
class MessageUnpinnedEventMessageDetail
{
    public function __construct(
        /** Date and time when the event occurred. */
        public ?\DateTimeInterface $eventDateTime = null,
        /** Initiator of the event. */
        public ?string $initiator = null
    ) {}
}
