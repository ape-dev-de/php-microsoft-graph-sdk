<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeacher
 */
class EducationTeacher
{
    public function __construct(
        /** ID of the teacher in the source system. */
        public ?string $externalId = null,
        /** Teacher number. */
        public ?string $teacherNumber = null
    ) {}
}
