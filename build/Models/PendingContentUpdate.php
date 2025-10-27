<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingContentUpdate
 */
class PendingContentUpdate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Date and time the pending binary operation was queued in UTC time. Read-only. */
    public ?\DateTimeInterface $queuedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['queuedDateTime'])) {
            $this->queuedDateTime = is_string($data['queuedDateTime']) ? new \DateTimeImmutable($data['queuedDateTime']) : $data['queuedDateTime'];
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
