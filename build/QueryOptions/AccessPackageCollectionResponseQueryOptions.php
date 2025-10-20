<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
