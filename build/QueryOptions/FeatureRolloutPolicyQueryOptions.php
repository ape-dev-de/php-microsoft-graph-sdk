<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FeatureRolloutPolicy resources
 *
 * Available select fields:
 */
class FeatureRolloutPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FeatureRolloutPolicy
     */

    /**
     * Select specific FeatureRolloutPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
