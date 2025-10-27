<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperience
 */
class EmployeeExperience
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A collection of communities in Viva Engage.
     * @var Community[]
     */
    public array $communities = [];

    /** 
     * A collection of long-running, asynchronous operations related to Viva Engage.
     * @var EngagementAsyncOperation[]
     */
    public array $engagementAsyncOperations = [];

    /** 
     * 
     * @var LearningCourseActivity[]
     */
    public array $learningCourseActivities = [];

    /** 
     * A collection of learning providers.
     * @var LearningProvider[]
     */
    public array $learningProviders = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['communities'])) {
            $this->communities = $data['communities'];
        }
        if (isset($data['engagementAsyncOperations'])) {
            $this->engagementAsyncOperations = $data['engagementAsyncOperations'];
        }
        if (isset($data['learningCourseActivities'])) {
            $this->learningCourseActivities = $data['learningCourseActivities'];
        }
        if (isset($data['learningProviders'])) {
            $this->learningProviders = $data['learningProviders'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
