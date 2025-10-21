<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSet
 */
class SecurityDataSet
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created the data set. Read-only. */
        public ?string $createdBy = null,
        /** The date and time when the review set was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of the data set. */
        public ?string $description = null,
        /** The name of the data set. The name is unique with a maximum limit of 64 characters. */
        public ?string $displayName = null
    ) {}
}
