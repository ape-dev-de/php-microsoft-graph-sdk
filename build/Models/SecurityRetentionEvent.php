<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEvent
 */
class SecurityRetentionEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created the retentionEvent. */
        public ?string $createdBy = null,
        /** The date time when the retentionEvent was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Optional information about the event. */
        public ?string $description = null,
        /** Name of the event. */
        public ?string $displayName = null,
        /** Represents the success status of a created event and additional information. */
        public array $eventPropagationResults = [],
        /** Represents the workload (SharePoint Online, OneDrive for Business, Exchange Online) and identification information associated with a retention event. */
        public array $eventQueries = [],
        /** Status of event propogation to the scoped locations after the event has been created. */
        public ?string $eventStatus = null,
        /** Optional time when the event should be triggered. */
        public ?\DateTimeInterface $eventTriggerDateTime = null,
        /** The user who last modified the retentionEvent. */
        public ?string $lastModifiedBy = null,
        /** The latest date time when the retentionEvent was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Last time the status of the event was updated. */
        public ?\DateTimeInterface $lastStatusUpdateDateTime = null,
        /** Specifies the event that will start the retention period for labels that use this event type when an event is created. */
        public ?string $retentionEventType = null
    ) {}
}
