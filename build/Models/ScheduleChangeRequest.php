<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleChangeRequest
 */
class ScheduleChangeRequest
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
        /** Indicates who the request is assigned to. Possible values are: sender, recipient, manager, system, unknownFutureValue. */
        public ?ScheduleChangeRequestActor $assignedTo = null,
        /** The date and time when the manager approved or declined the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $managerActionDateTime = null,
        /** The message sent by the manager regarding the scheduleChangeRequest. Optional. */
        public ?string $managerActionMessage = null,
        /** The user ID of the manager who approved or declined the scheduleChangeRequest. */
        public ?string $managerUserId = null,
        /** The date and time when the sender sent the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $senderDateTime = null,
        /** The message sent by the sender of the scheduleChangeRequest. Optional. */
        public ?string $senderMessage = null,
        /** The user ID of the sender of the scheduleChangeRequest. */
        public ?string $senderUserId = null,
        /** The state of the scheduleChangeRequest. Possible values are: pending, approved, declined, unknownFutureValue. */
        public ?ScheduleChangeState $state = null
    ) {}
}
