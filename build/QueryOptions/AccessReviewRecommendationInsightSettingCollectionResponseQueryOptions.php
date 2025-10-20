<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewRecommendationInsightSettingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewRecommendationInsightSettingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewRecommendationInsightSettingCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewRecommendationInsightSettingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
