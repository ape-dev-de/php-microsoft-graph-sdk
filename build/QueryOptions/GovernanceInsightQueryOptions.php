<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GovernanceInsight resources
 *
 * Available select fields:
 * - insightCreatedDateTime
 */
class GovernanceInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GovernanceInsight
     */
    public const FIELD_INSIGHT_CREATED_DATE_TIME = 'insightCreatedDateTime';

    /**
     * Select specific GovernanceInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
