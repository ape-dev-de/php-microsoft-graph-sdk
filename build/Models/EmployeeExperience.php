<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmployeeExperience
 */
class EmployeeExperience
{
    public function __construct(
        /** A collection of communities in Viva Engage. */
        public array $communities = [],
        /** A collection of long-running, asynchronous operations related to Viva Engage. */
        public array $engagementAsyncOperations = [],
        /**  */
        public array $learningCourseActivities = [],
        /** A collection of learning providers. */
        public array $learningProviders = []
    ) {}
}
