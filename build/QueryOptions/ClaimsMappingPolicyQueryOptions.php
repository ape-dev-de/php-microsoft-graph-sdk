<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClaimsMappingPolicy resources
 *
 * Available select fields:
 */
class ClaimsMappingPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ClaimsMappingPolicy
     */

    /**
     * Select specific ClaimsMappingPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
