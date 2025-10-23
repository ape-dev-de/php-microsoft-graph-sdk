<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEvent
 */
class SecurityRetentionEvent
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The user who created the retentionEvent.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date time when the retentionEvent was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Optional information about the event. */
    public ?string $description = null;

    /** Name of the event. */
    public ?string $displayName = null;

    /** 
     * Represents the success status of a created event and additional information.
     * @var SecurityEventPropagationResult[]
     */
    public array $eventPropagationResults = [];

    /** 
     * Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     * @var SecurityEventQuery[]
     */
    public array $eventQueries = [];

    /** 
     * Status of event propogation to the scoped locations after the event has been created.
     * @var SecurityRetentionEventStatus|\stdClass|null
     */
    public mixed $eventStatus = null;

    /** Optional time when the event should be triggered. */
    public ?\DateTimeInterface $eventTriggerDateTime = null;

    /** 
     * The user who last modified the retentionEvent.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The latest date time when the retentionEvent was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Last time the status of the event was updated. */
    public ?\DateTimeInterface $lastStatusUpdateDateTime = null;

    /** 
     * Specifies the event that will start the retention period for labels that use this event type when an event is created.
     * @var SecurityRetentionEventType|\stdClass|null
     */
    public mixed $retentionEventType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['eventPropagationResults'])) {
            $this->eventPropagationResults = $data['eventPropagationResults'];
        }
        if (isset($data['eventQueries'])) {
            $this->eventQueries = $data['eventQueries'];
        }
        if (isset($data['eventStatus'])) {
            $this->eventStatus = $data['eventStatus'];
        }
        if (isset($data['eventTriggerDateTime'])) {
            $this->eventTriggerDateTime = is_string($data['eventTriggerDateTime']) ? new \DateTimeImmutable($data['eventTriggerDateTime']) : $data['eventTriggerDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['lastStatusUpdateDateTime'])) {
            $this->lastStatusUpdateDateTime = is_string($data['lastStatusUpdateDateTime']) ? new \DateTimeImmutable($data['lastStatusUpdateDateTime']) : $data['lastStatusUpdateDateTime'];
        }
        if (isset($data['retentionEventType'])) {
            $this->retentionEventType = $data['retentionEventType'];
        }
    }
}
