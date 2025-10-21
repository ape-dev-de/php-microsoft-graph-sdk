<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceMembershipChangeType resources
 *
 * Available select fields:
 */
class IdentityGovernanceMembershipChangeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceMembershipChangeType
     */

    /**
     * Select specific IdentityGovernanceMembershipChangeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
