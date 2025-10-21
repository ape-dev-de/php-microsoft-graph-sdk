<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSignInRecommendationScope resources
 *
 * Available select fields:
 */
class UserSignInRecommendationScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSignInRecommendationScope
     */

    /**
     * Select specific UserSignInRecommendationScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
