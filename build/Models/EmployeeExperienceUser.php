<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperienceUser
 */
class EmployeeExperienceUser
{
    /**
     * @var string[]
     */
    private array $learningCourseActivities = [];


    /**
     * @return string[]
     */
    public function getLearningCourseActivities(): array
    {
        return $this->learningCourseActivities;
    }

    /**
     * @param string[] $learningCourseActivities
     */
    public function setLearningCourseActivities(array $learningCourseActivities): self
    {
        $this->learningCourseActivities = $learningCourseActivities;
        return $this;
    }

}
