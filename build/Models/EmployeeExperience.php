<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperience
 */
class EmployeeExperience
{
    /**
     * A collection of communities in Viva Engage.
     */
    private array $communities = [];

    /**
     * A collection of long-running, asynchronous operations related to Viva Engage.
     */
    private array $engagementAsyncOperations = [];

    /**
     */
    private array $learningCourseActivities = [];

    /**
     * Represents a container that exposes navigation properties for employee experience resources.
     * @var string[]
     */
    private array $learningProviders = [];


    public function getCommunities(): array
    {
        return $this->communities;
    }

    public function setCommunities(array $communities): self
    {
        $this->communities = $communities;
        return $this;
    }

    public function getEngagementAsyncOperations(): array
    {
        return $this->engagementAsyncOperations;
    }

    public function setEngagementAsyncOperations(array $engagementAsyncOperations): self
    {
        $this->engagementAsyncOperations = $engagementAsyncOperations;
        return $this;
    }

    public function getLearningCourseActivities(): array
    {
        return $this->learningCourseActivities;
    }

    public function setLearningCourseActivities(array $learningCourseActivities): self
    {
        $this->learningCourseActivities = $learningCourseActivities;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLearningProviders(): array
    {
        return $this->learningProviders;
    }

    /**
     * @param string[] $learningProviders
     */
    public function setLearningProviders(array $learningProviders): self
    {
        $this->learningProviders = $learningProviders;
        return $this;
    }

}
