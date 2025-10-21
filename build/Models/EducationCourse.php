<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationCourse
 */
class EducationCourse
{
    public function __construct(
        /** Unique identifier for the course. */
        public ?string $courseNumber = null,
        /** Description of the course. */
        public ?string $description = null,
        /** Name of the course. */
        public ?string $displayName = null,
        /** ID of the course from the syncing system. */
        public ?string $externalId = null,
        /** Subject of the course. */
        public ?string $subject = null
    ) {}
}
