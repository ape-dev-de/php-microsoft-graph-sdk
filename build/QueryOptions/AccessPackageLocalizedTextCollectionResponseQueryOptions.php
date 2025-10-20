<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageLocalizedTextCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageLocalizedTextCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageLocalizedTextCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageLocalizedTextCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
