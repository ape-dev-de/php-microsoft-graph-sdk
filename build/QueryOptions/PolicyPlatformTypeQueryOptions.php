<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyPlatformType resources
 *
 * Available select fields:
 */
class PolicyPlatformTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyPlatformType
     */

    /**
     * Select specific PolicyPlatformType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
