<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceScopeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageResourceScopeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageResourceScopeCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageResourceScopeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
