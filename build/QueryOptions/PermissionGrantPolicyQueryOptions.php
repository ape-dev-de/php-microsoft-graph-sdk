<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionGrantPolicy resources
 *
 * Available select fields:
 */
class PermissionGrantPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PermissionGrantPolicy
     */

    /**
     * Select specific PermissionGrantPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
