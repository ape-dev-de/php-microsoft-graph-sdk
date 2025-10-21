<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperienceUser
 */
class EmployeeExperienceUser
{
    public function __construct(
        /** @var string[]  */
        public array $learningCourseActivities = []
    ) {}
}
