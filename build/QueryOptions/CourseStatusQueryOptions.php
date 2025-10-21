<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CourseStatus resources
 *
 * Available select fields:
 */
class CourseStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CourseStatus
     */

    /**
     * Select specific CourseStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
