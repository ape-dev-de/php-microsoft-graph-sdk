<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningStatusErrorCategory resources
 *
 * Available select fields:
 */
class ProvisioningStatusErrorCategoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningStatusErrorCategory
     */

    /**
     * Select specific ProvisioningStatusErrorCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
