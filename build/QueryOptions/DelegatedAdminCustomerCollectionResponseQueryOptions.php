<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminCustomerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminCustomerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminCustomerCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminCustomerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
