<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserLastSignInRecommendationInsightSetting resources
 *
 * Available select fields:
 * - recommendationLookBackDuration
 * - signInScope
 */
class UserLastSignInRecommendationInsightSettingQueryOptions extends QueryOptions
{
    public const FIELD_RECOMMENDATION_LOOK_BACK_DURATION = 'recommendationLookBackDuration';
    public const FIELD_SIGN_IN_SCOPE = 'signInScope';

    /**
     * Select specific UserLastSignInRecommendationInsightSetting properties
     * 
     * @param array<string> $select Use UserLastSignInRecommendationInsightSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
