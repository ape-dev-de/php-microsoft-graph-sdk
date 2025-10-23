<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallEvent
 */
class EmergencyCallEvent
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
     * 
     * @var EmergencyCallerInfo|\stdClass|null
     */
    public mixed $callerInfo = null;

    /**  */
    public ?string $emergencyNumberDialed = null;

    /**  */
    public ?string $policyName = null;


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
        if (isset($data['callerInfo'])) {
            $this->callerInfo = $data['callerInfo'];
        }
        if (isset($data['emergencyNumberDialed'])) {
            $this->emergencyNumberDialed = $data['emergencyNumberDialed'];
        }
        if (isset($data['policyName'])) {
            $this->policyName = $data['policyName'];
        }
    }
}
