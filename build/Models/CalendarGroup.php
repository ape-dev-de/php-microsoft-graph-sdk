<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarGroup
 */
class CalendarGroup
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
        public ?string $changeKey = null,
        /** The class identifier. Read-only. */
        public ?string $classId = null,
        /** The group name. */
        public ?string $name = null,
        /** @var string[] The calendars in the calendar group. Navigation property. Read-only. Nullable. */
        public array $calendars = []
    ) {}
}
