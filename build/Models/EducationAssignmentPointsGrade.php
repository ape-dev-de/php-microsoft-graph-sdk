<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGrade
 */
class EducationAssignmentPointsGrade
{
    /**
     * Number of points a teacher is giving this submission object.
     */
    private ?string $points;

    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(?string $points): self
    {
        $this->points = $points;
        return $this;
    }

}
