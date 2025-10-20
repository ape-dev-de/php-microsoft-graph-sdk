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
    public const FIELD_DETAILS = 'details';

    /**
     * Select specific ProvisioningSystem properties
     * 
     * @param array<string> $select Use ProvisioningSystemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
