<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FeatureType resources
 *
 * Available select fields:
 */
class FeatureTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FeatureType
     */

    /**
     * Select specific FeatureType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
