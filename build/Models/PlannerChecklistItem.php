<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerChecklistItem
 */
class PlannerChecklistItem
{
    public function __construct(
        /** Value is true if the item is checked and false otherwise. */
        public ?bool $isChecked = null,
        /** Read-only. User ID by which this is last modified. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Used to set the relative order of items in the checklist. The format is defined as outlined here. */
        public ?string $orderHint = null,
        /** Title of the checklist item */
        public ?string $title = null
    ) {}
}
