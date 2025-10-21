<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCalloutData resources
 *
 * Available select fields:
 */
class IdentityGovernanceCustomTaskExtensionCalloutDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceCustomTaskExtensionCalloutData
     */

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCalloutData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
