<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserLastSignInRecommendationInsightSetting resources
 *
 * Available select fields:
 */
class UserLastSignInRecommendationInsightSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserLastSignInRecommendationInsightSetting
     */

    /**
     * Select specific UserLastSignInRecommendationInsightSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
