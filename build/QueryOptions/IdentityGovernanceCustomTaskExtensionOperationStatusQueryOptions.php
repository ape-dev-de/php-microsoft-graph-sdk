<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionOperationStatus resources
 *
 * Available select fields:
 */
class IdentityGovernanceCustomTaskExtensionOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceCustomTaskExtensionOperationStatus
     */

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
