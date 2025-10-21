<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Shift
 */
class Shift
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the creator of the entity. */
        public ?IdentitySet $createdBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identity of the person who last modified the entity. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Draft changes in the shift. Draft changes are only visible to managers. The changes are visible to employees when they're shared, which copies the changes from the draftShift to the sharedShift property. */
        public ?ShiftItem $draftShift = null,
        /** The shift is marked for deletion, a process that is finalized when the schedule is shared. */
        public ?bool $isStagedForDeletion = null,
        /** ID of the scheduling group the shift is part of. Required. */
        public ?string $schedulingGroupId = null,
        /** The shared version of this shift that is viewable by both employees and managers. Updates to the sharedShift property send notifications to users in the Teams client. */
        public ?ShiftItem $sharedShift = null,
        /** ID of the user assigned to the shift. Required. */
        public ?string $userId = null
    ) {}
}
