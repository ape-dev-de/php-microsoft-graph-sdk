<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppDistributionMethod resources
 *
 * Available select fields:
 */
class TeamsAppDistributionMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppDistributionMethod
     */

    /**
     * Select specific TeamsAppDistributionMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
