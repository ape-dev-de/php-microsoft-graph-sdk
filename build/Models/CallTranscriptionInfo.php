<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptionInfo
 */
class CallTranscriptionInfo
{
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
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
