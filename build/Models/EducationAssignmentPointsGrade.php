<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGrade
 */
class EducationAssignmentPointsGrade
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * User who did the grading.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $gradedBy = null;

    /** Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $gradedDateTime = null;

    /** 
     * Number of points a teacher is giving this submission object.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $points = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['gradedBy'])) {
            $this->gradedBy = is_array($data['gradedBy']) ? new IdentitySet($data['gradedBy']) : $data['gradedBy'];
        }
        if (isset($data['gradedDateTime'])) {
            $this->gradedDateTime = is_string($data['gradedDateTime']) ? new \DateTimeImmutable($data['gradedDateTime']) : $data['gradedDateTime'];
        }
        if (isset($data['points'])) {
            $this->points = is_numeric($data['points']) ? (float)$data['points'] : $data['points'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
