<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperienceUser
 */
class EmployeeExperienceUser
{
    /**
     */
    private ?string $learningCourseActivities;

    public function getLearningCourseActivities(): ?string
    {
        return $this->learningCourseActivities;
    }

    public function setLearningCourseActivities(?string $learningCourseActivities): self
    {
        $this->learningCourseActivities = $learningCourseActivities;
        return $this;
    }

}
