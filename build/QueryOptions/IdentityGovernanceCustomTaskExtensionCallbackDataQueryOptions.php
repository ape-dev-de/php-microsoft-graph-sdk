<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCallbackData resources
 *
 * Available select fields:
 */
class IdentityGovernanceCustomTaskExtensionCallbackDataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceCustomTaskExtensionCallbackData
     */

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCallbackData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
