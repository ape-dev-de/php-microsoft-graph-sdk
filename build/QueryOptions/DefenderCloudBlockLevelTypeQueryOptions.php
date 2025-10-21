<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefenderCloudBlockLevelType resources
 *
 * Available select fields:
 */
class DefenderCloudBlockLevelTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefenderCloudBlockLevelType
     */

    /**
     * Select specific DefenderCloudBlockLevelType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
