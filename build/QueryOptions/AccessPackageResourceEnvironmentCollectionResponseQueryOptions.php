<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceEnvironmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageResourceEnvironmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageResourceEnvironmentCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageResourceEnvironmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
