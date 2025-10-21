<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationLinkedAssignmentResource
 */
class EducationLinkedAssignmentResource
{
    public function __construct(
        /** The individual who created the resource. */
        public ?IdentitySet $createdBy = null,
        /** Moment in time when the resource was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Display name of resource. */
        public ?string $displayName = null,
        /** The last user to modify the resource. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** URL of the actual assignment. */
        public ?string $url = null
    ) {}
}
