<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPointsOutcome
 */
class EducationPointsOutcome
{
    /**
     * The numeric grade the teacher has given the student for this assignment.
     */
    private ?string $points;

    /**
     * A copy of the points property that is made when the grade is released to the student.
     */
    private ?string $publishedPoints;


    public function getPoints(): ?string
    {
        return $this->points;
    }

    public function setPoints(?string $points): self
    {
        $this->points = $points;
        return $this;
    }

    public function getPublishedPoints(): ?string
    {
        return $this->publishedPoints;
    }

    public function setPublishedPoints(?string $publishedPoints): self
    {
        $this->publishedPoints = $publishedPoints;
        return $this;
    }

}
