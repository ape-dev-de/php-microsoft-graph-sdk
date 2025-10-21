<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningAction resources
 *
 * Available select fields:
 */
class ProvisioningActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningAction
     */

    /**
     * Select specific ProvisioningAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
