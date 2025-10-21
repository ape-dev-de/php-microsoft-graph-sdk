<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningSystem resources
 *
 * Available select fields:
 * - details
 */
class ProvisioningSystemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProvisioningSystem
     */
    public const FIELD_DETAILS = 'details';

    /**
     * Select specific ProvisioningSystem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
