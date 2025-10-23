<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubricOutcome
 */
class EducationRubricOutcome
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
     * A copy of the rubricQualityFeedback property that is made when the grade is released to the student.
     * @var RubricQualityFeedbackModel[]
     */
    public array $publishedRubricQualityFeedback = [];

    /** 
     * A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student.
     * @var RubricQualitySelectedColumnModel[]
     */
    public array $publishedRubricQualitySelectedLevels = [];

    /** 
     * A collection of specific feedback for each quality of this rubric.
     * @var RubricQualityFeedbackModel[]
     */
    public array $rubricQualityFeedback = [];

    /** 
     * The level that the teacher has selected for each quality while grading this assignment.
     * @var RubricQualitySelectedColumnModel[]
     */
    public array $rubricQualitySelectedLevels = [];


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
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['publishedRubricQualityFeedback'])) {
            $this->publishedRubricQualityFeedback = $data['publishedRubricQualityFeedback'];
        }
        if (isset($data['publishedRubricQualitySelectedLevels'])) {
            $this->publishedRubricQualitySelectedLevels = $data['publishedRubricQualitySelectedLevels'];
        }
        if (isset($data['rubricQualityFeedback'])) {
            $this->rubricQualityFeedback = $data['rubricQualityFeedback'];
        }
        if (isset($data['rubricQualitySelectedLevels'])) {
            $this->rubricQualitySelectedLevels = $data['rubricQualitySelectedLevels'];
        }
    }
}
