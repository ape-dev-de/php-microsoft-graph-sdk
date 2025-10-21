<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchedulingGroup
 */
class SchedulingGroup
{
    public function __construct(
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
