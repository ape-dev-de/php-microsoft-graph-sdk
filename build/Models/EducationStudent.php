<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationStudent
 */
class EducationStudent
{
    public function __construct(
        /** Birth date of the student. */
        public ?\DateTimeInterface $birthDate = null,
        /** ID of the student in the source system. */
        public ?string $externalId = null,
        /** The possible values are: female, male, other, unknownFutureValue. */
        public ?EducationGender $gender = null,
        /** Current grade level of the student. */
        public ?string $grade = null,
        /** Year the student is graduating from the school. */
        public ?string $graduationYear = null,
        /** Student Number. */
        public ?string $studentNumber = null
    ) {}
}
