<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchedulingGroup
 */
class SchedulingGroup
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
        /** The code for the schedulingGroup to represent an external identifier. This field must be unique within the team in Microsoft Teams and uses an alphanumeric format, with a maximum of 100 characters. */
        public ?string $code = null,
        /** The display name for the schedulingGroup. Required. */
        public ?string $displayName = null,
        /** Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required. */
        public ?bool $isActive = null,
        /** @var string[] The list of user IDs that are a member of the schedulingGroup. Required. */
        public array $userIds = []
    ) {}
}
