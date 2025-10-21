<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCard
 */
class TimeCard
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
        /** The list of breaks associated with the timeCard. */
        public array $breaks = [],
        /** The clock-in event of the timeCard. */
        public ?TimeCardEvent $clockInEvent = null,
        /** The clock-out event of the timeCard. */
        public ?TimeCardEvent $clockOutEvent = null,
        /** Indicates whether this timeCard entry is confirmed. Possible values are: none, user, manager, unknownFutureValue. */
        public ?ConfirmedBy $confirmedBy = null,
        /** Notes about the timeCard. */
        public ?ItemBody $notes = null,
        /** The original timeCardEntry of the timeCard before it was edited. */
        public ?TimeCardEntry $originalEntry = null,
        /** The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue. */
        public ?TimeCardState $state = null,
        /** User ID to which the timeCard belongs. */
        public ?string $userId = null
    ) {}
}
