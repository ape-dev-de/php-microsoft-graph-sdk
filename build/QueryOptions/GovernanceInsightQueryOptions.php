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
    public const FIELD_INSIGHT_CREATED_DATE_TIME = 'insightCreatedDateTime';

    /**
     * Select specific GovernanceInsight properties
     * 
     * @param array<string> $select Use GovernanceInsightQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
