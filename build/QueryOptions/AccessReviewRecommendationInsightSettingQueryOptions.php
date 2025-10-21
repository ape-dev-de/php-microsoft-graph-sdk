<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewRecommendationInsightSetting resources
 *
 * Available select fields:
 */
class AccessReviewRecommendationInsightSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewRecommendationInsightSetting
     */

    /**
     * Select specific AccessReviewRecommendationInsightSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
