<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubric
 */
class EducationRubric
{
    /**
     * The user who created this resource.
     */
    private ?string $createdBy;

    /**
     * The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of this rubric.
     */
    private ?string $description;

    /**
     * The name of this rubric.
     */
    private ?string $displayName;

    /**
     * The grading type of this rubric. You can use null for a no-points rubric or educationAssignmentPointsGradeType for a points rubric.
     */
    private ?string $grading;

    /**
     * The last user to modify the resource.
     */
    private ?string $lastModifiedBy;

    /**
     * Moment in time when the resource was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The collection of levels making up this rubric.
     */
    private array $levels = [];

    /**
     * The collection of qualities making up this rubric.
     * @var string[]
     */
    private array $qualities = [];


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getGrading(): ?string
    {
        return $this->grading;
    }

    public function setGrading(?string $grading): self
    {
        $this->grading = $grading;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLevels(): array
    {
        return $this->levels;
    }

    public function setLevels(array $levels): self
    {
        $this->levels = $levels;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQualities(): array
    {
        return $this->qualities;
    }

    /**
     * @param string[] $qualities
     */
    public function setQualities(array $qualities): self
    {
        $this->qualities = $qualities;
        return $this;
    }

}
