<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCatalogCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageCatalogCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageCatalogCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageCatalogCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
