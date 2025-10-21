<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOff
 */
class TimeOff
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the creator of the entity. */
        public ?string $createdBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identity of the person who last modified the entity. */
        public ?string $lastModifiedBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The draft version of this timeOff item that is viewable by managers. It must be shared before it's visible to team members. Required. */
        public ?string $draftTimeOff = null,
        /** The timeOff is marked for deletion, a process that is finalized when the schedule is shared. */
        public ?bool $isStagedForDeletion = null,
        /** The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required. */
        public ?string $sharedTimeOff = null,
        /** ID of the user assigned to the timeOff. Required. */
        public ?string $userId = null
    ) {}
}
