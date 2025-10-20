<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningSelfInitiatedCourse resources
 *
 * Available select fields:
 * - startedDateTime
 */
class LearningSelfInitiatedCourseQueryOptions extends QueryOptions
{
    public const FIELD_STARTED_DATE_TIME = 'startedDateTime';

    /**
     * Select specific LearningSelfInitiatedCourse properties
     * 
     * @param array<string> $select Use LearningSelfInitiatedCourseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
