<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubric
 */
class EducationRubric
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The user who created this resource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The description of this rubric.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $description = null;

    /** The name of this rubric. */
    public ?string $displayName = null;

    /** 
     * The grading type of this rubric. You can use null for a no-points rubric or educationAssignmentPointsGradeType for a points rubric.
     * @var EducationAssignmentGradeType|\stdClass|null
     */
    public mixed $grading = null;

    /** 
     * The last user to modify the resource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Moment in time when the resource was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The collection of levels making up this rubric.
     * @var RubricLevel[]
     */
    public array $levels = [];

    /** 
     * The collection of qualities making up this rubric.
     * @var RubricQuality[]
     */
    public array $qualities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['grading'])) {
            $this->grading = $data['grading'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['levels'])) {
            $this->levels = $data['levels'];
        }
        if (isset($data['qualities'])) {
            $this->qualities = $data['qualities'];
        }
    }
}
