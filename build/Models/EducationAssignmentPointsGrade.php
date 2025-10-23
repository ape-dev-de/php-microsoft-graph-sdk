<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGrade
 */
class EducationAssignmentPointsGrade
{
    /** 
     * User who did the grading.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $gradedBy = null;

    /** Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $gradedDateTime = null;

    /** Number of points a teacher is giving this submission object. */
    public ?string $points = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['gradedBy'])) {
            $this->gradedBy = $data['gradedBy'];
        }
        if (isset($data['gradedDateTime'])) {
            $this->gradedDateTime = is_string($data['gradedDateTime']) ? new \DateTimeImmutable($data['gradedDateTime']) : $data['gradedDateTime'];
        }
        if (isset($data['points'])) {
            $this->points = $data['points'];
        }
    }
}
