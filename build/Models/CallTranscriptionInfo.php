<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptionInfo
 */
class CallTranscriptionInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The state modified time in UTC. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /**  */
    public ?CallTranscriptionState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new CallTranscriptionState($data['state']) : $data['state'];
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
