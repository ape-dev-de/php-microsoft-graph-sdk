<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGradeType
 */
class EducationAssignmentPointsGradeType
{
    /**
     * Max points possible for this assignment.
     */
    private ?string $maxPoints;

    public function getMaxPoints(): ?string
    {
        return $this->maxPoints;
    }

    public function setMaxPoints(?string $maxPoints): self
    {
        $this->maxPoints = $maxPoints;
        return $this;
    }

}
