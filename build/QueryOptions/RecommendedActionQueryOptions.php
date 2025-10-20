<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecommendedAction resources
 *
 * Available select fields:
 * - actionWebUrl
 * - potentialScoreImpact
 * - title
 */
class RecommendedActionQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_WEB_URL = 'actionWebUrl';
    public const FIELD_POTENTIAL_SCORE_IMPACT = 'potentialScoreImpact';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific RecommendedAction properties
     * 
     * @param array<string> $select Use RecommendedActionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
