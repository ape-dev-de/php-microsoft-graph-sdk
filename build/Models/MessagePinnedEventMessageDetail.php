<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessagePinnedEventMessageDetail
 */
class MessagePinnedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Date and time when the event occurred. */
    public ?\DateTimeInterface $eventDateTime = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
