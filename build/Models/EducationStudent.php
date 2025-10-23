<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationStudent
 */
class EducationStudent
{
    /** Birth date of the student. */
    public ?\DateTimeInterface $birthDate = null;

    /** ID of the student in the source system. */
    public ?string $externalId = null;

    /** 
     * The possible values are: female, male, other, unknownFutureValue.
     * @var EducationGender|\stdClass|null
     */
    public mixed $gender = null;

    /** Current grade level of the student. */
    public ?string $grade = null;

    /** Year the student is graduating from the school. */
    public ?string $graduationYear = null;

    /** Student Number. */
    public ?string $studentNumber = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['birthDate'])) {
            $this->birthDate = is_string($data['birthDate']) ? new \DateTimeImmutable($data['birthDate']) : $data['birthDate'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['gender'])) {
            $this->gender = is_array($data['gender']) ? new EducationGender($data['gender']) : $data['gender'];
        }
        if (isset($data['grade'])) {
            $this->grade = $data['grade'];
        }
        if (isset($data['graduationYear'])) {
            $this->graduationYear = $data['graduationYear'];
        }
        if (isset($data['studentNumber'])) {
            $this->studentNumber = $data['studentNumber'];
        }
    }
}
