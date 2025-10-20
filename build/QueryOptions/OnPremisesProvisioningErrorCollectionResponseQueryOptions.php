<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesProvisioningErrorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnPremisesProvisioningErrorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnPremisesProvisioningErrorCollectionResponse properties
     * 
     * @param array<string> $select Use OnPremisesProvisioningErrorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
