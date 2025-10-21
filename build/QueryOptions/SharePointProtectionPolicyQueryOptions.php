<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointProtectionPolicy resources
 *
 * Available select fields:
 */
class SharePointProtectionPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharePointProtectionPolicy
     */

    /**
     * Select specific SharePointProtectionPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
