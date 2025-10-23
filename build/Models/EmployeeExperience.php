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
}
