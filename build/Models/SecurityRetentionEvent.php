<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEvent
 */
class SecurityRetentionEvent
{
    /**
     * The user who created the retentionEvent.
     */
    private ?string $createdBy;

    /**
     * The date time when the retentionEvent was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Optional information about the event.
     */
    private ?string $description;

    /**
     * Name of the event.
     */
    private ?string $displayName;

    /**
     * Represents the success status of a created event and additional information.
     */
    private array $eventPropagationResults = [];

    /**
     * Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event.
     */
    private array $eventQueries = [];

    /**
     * Status of event propogation to the scoped locations after the event has been created.
     */
    private ?string $eventStatus;

    /**
     * Optional time when the event should be triggered.
     */
    private ?\DateTimeInterface $eventTriggerDateTime;

    /**
     * The user who last modified the retentionEvent.
     */
    private ?string $lastModifiedBy;

    /**
     * The latest date time when the retentionEvent was modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Last time the status of the event was updated.
     */
    private ?\DateTimeInterface $lastStatusUpdateDateTime;

    /**
     * Specifies the event that will start the retention period for labels that use this event type when an event is created.
     */
    private ?string $retentionEventType;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEventPropagationResults(): array
    {
        return $this->eventPropagationResults;
    }

    public function setEventPropagationResults(array $eventPropagationResults): self
    {
        $this->eventPropagationResults = $eventPropagationResults;
        return $this;
    }

    public function getEventQueries(): array
    {
        return $this->eventQueries;
    }

    public function setEventQueries(array $eventQueries): self
    {
        $this->eventQueries = $eventQueries;
        return $this;
    }

    public function getEventStatus(): ?string
    {
        return $this->eventStatus;
    }

    public function setEventStatus(?string $eventStatus): self
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    public function getEventTriggerDateTime(): ?\DateTimeInterface
    {
        return $this->eventTriggerDateTime;
    }

    public function setEventTriggerDateTime(?\DateTimeInterface $eventTriggerDateTime): self
    {
        $this->eventTriggerDateTime = $eventTriggerDateTime;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLastStatusUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastStatusUpdateDateTime;
    }

    public function setLastStatusUpdateDateTime(?\DateTimeInterface $lastStatusUpdateDateTime): self
    {
        $this->lastStatusUpdateDateTime = $lastStatusUpdateDateTime;
        return $this;
    }

    public function getRetentionEventType(): ?string
    {
        return $this->retentionEventType;
    }

    public function setRetentionEventType(?string $retentionEventType): self
    {
        $this->retentionEventType = $retentionEventType;
        return $this;
    }

}
