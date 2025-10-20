<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsScoreHistoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsScoreHistoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsScoreHistoryCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsScoreHistoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
