<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationPointsOutcome resources
 *
 * Available select fields:
 * - points
 * - publishedPoints
 */
class EducationPointsOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationPointsOutcome
     */
    public const FIELD_POINTS = 'points';
    public const FIELD_PUBLISHED_POINTS = 'publishedPoints';

    /**
     * Select specific EducationPointsOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
