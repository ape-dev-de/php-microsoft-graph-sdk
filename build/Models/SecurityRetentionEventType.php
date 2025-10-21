<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventType
 */
class SecurityRetentionEventType
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created the retentionEventType. */
        public ?IdentitySet $createdBy = null,
        /** The date time when the retentionEventType was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Optional information about the event type. */
        public ?string $description = null,
        /** Name of the event type. */
        public ?string $displayName = null,
        /** The user who last modified the retentionEventType. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The latest date time when the retentionEventType was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
