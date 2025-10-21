<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerExternalReference
 */
class PlannerExternalReference
{
    public function __construct(
        /** A name alias to describe the reference. */
        public ?string $alias = null,
        /** Read-only. User ID by which this is last modified. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Read-only. Date and time at which this is last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Used to set the relative priority order in which the reference will be shown as a preview on the task. */
        public ?string $previewPriority = null,
        /** Used to describe the type of the reference. Types include: PowerPoint, Word, Excel, Other. */
        public ?string $type = null
    ) {}
}
