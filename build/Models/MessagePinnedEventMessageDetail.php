<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessagePinnedEventMessageDetail
 */
class MessagePinnedEventMessageDetail
{
    /** Date and time when the event occurred. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = $data['eventDateTime'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
    }
}
