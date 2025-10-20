<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisioningStepCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProvisioningStepCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProvisioningStepCollectionResponse properties
     * 
     * @param array<string> $select Use ProvisioningStepCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
