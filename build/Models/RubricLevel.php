<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricLevel
 */
class RubricLevel
{
    /**
     * The description of this rubric level.
     */
    private ?string $description;

    /**
     * The name of this rubric level.
     */
    private ?string $displayName;

    /**
     * Null if this is a no-points rubric; educationAssignmentPointsGradeType if it's a points rubric.
     */
    private ?string $grading;

    /**
     * The ID of this resource.
     */
    private ?string $levelId;


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

    public function getLevelId(): ?string
    {
        return $this->levelId;
    }

    public function setLevelId(?string $levelId): self
    {
        $this->levelId = $levelId;
        return $this;
    }

}
