<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningResult resources
 *
 * Available select fields:
 */
class ProvisioningResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningResult
     */

    /**
     * Select specific ProvisioningResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
