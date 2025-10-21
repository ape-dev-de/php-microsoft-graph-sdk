<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningObjectSummary resources
 *
 * Available select fields:
 */
class ProvisioningObjectSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningObjectSummary
     */

    /**
     * Select specific ProvisioningObjectSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
