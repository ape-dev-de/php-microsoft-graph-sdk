<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperienceUser
 */
class EmployeeExperienceUser
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var LearningCourseActivity[]
     */
    public array $learningCourseActivities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['learningCourseActivities'])) {
            $this->learningCourseActivities = $data['learningCourseActivities'];
        }
    }
}
