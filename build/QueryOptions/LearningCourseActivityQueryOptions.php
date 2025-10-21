<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningCourseActivity resources
 *
 * Available select fields:
 */
class LearningCourseActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningCourseActivity
     */

    /**
     * Select specific LearningCourseActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
