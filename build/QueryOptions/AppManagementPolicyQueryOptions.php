<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementPolicy resources
 *
 * Available select fields:
 */
class AppManagementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppManagementPolicy
     */

    /**
     * Select specific AppManagementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
