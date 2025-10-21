<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserDataSecurityAndGovernance resources
 *
 * Available select fields:
 */
class UserDataSecurityAndGovernanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserDataSecurityAndGovernance
     */

    /**
     * Select specific UserDataSecurityAndGovernance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
