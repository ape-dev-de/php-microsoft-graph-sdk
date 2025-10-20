<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceAttributeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageResourceAttributeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageResourceAttributeCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageResourceAttributeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
