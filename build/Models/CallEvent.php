<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEvent
 */
class CallEvent
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?CallEventType $callEventType = null;

    /**  */
    public ?\DateTimeInterface $eventDateTime = null;

    /** 
     * 
     * @var Participant[]
     */
    public array $participants = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['callEventType'])) {
            $this->callEventType = $data['callEventType'];
        }
        if (isset($data['eventDateTime'])) {
            $this->eventDateTime = is_string($data['eventDateTime']) ? new \DateTimeImmutable($data['eventDateTime']) : $data['eventDateTime'];
        }
        if (isset($data['participants'])) {
            $this->participants = $data['participants'];
        }
    }
}
