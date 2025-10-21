<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupPeerOutlierRecommendationInsightSettings resources
 *
 * Available select fields:
 */
class GroupPeerOutlierRecommendationInsightSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupPeerOutlierRecommendationInsightSettings
     */

    /**
     * Select specific GroupPeerOutlierRecommendationInsightSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
