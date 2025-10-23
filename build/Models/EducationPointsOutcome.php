<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPointsOutcome
 */
class EducationPointsOutcome
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The individual who updated the resource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The moment in time when the resource was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The numeric grade the teacher has given the student for this assignment.
     * @var EducationAssignmentPointsGrade|\stdClass|null
     */
    public mixed $points = null;

    /** 
     * A copy of the points property that is made when the grade is released to the student.
     * @var EducationAssignmentPointsGrade|\stdClass|null
     */
    public mixed $publishedPoints = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['points'])) {
            $this->points = $data['points'];
        }
        if (isset($data['publishedPoints'])) {
            $this->publishedPoints = $data['publishedPoints'];
        }
    }
}
