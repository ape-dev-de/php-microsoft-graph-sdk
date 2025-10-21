<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningSelfInitiatedCourse resources
 *
 * Available select fields:
 */
class LearningSelfInitiatedCourseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LearningSelfInitiatedCourse
     */

    /**
     * Select specific LearningSelfInitiatedCourse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
