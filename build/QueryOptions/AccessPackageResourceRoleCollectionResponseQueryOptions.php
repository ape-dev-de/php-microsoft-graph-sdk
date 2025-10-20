<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRoleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageResourceRoleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageResourceRoleCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageResourceRoleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
