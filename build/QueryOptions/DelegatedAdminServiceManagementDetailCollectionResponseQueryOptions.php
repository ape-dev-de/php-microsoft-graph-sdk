<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminServiceManagementDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedAdminServiceManagementDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedAdminServiceManagementDetailCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedAdminServiceManagementDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
