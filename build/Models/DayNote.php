<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DayNote
 */
class DayNote
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
        /** The date of the day note. */
        public ?\DateTimeInterface $dayNoteDate = null,
        /** The draft version of this day note that is viewable by managers. Only contentType text is supported. */
        public ?ItemBody $draftDayNote = null,
        /** The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported. */
        public ?ItemBody $sharedDayNote = null
    ) {}
}
