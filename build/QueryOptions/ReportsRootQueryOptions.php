<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReportsRoot resources
 *
 * Available select fields:
 * - readingAssignmentSubmissions
 * - reflectCheckInResponses
 */
class ReportsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReportsRoot
     */
    public const FIELD_READING_ASSIGNMENT_SUBMISSIONS = 'readingAssignmentSubmissions';
    public const FIELD_REFLECT_CHECK_IN_RESPONSES = 'reflectCheckInResponses';

    /**
     * Select specific ReportsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
