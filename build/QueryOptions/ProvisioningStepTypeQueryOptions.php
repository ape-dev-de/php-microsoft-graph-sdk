<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningStepType resources
 *
 * Available select fields:
 */
class ProvisioningStepTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningStepType
     */

    /**
     * Select specific ProvisioningStepType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
