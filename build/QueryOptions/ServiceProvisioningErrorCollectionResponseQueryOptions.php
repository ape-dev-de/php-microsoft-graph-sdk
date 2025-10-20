<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceProvisioningErrorCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServiceProvisioningErrorCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServiceProvisioningErrorCollectionResponse properties
     * 
     * @param array<string> $select Use ServiceProvisioningErrorCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
