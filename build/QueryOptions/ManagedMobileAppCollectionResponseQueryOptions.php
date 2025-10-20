<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedMobileAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedMobileAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedMobileAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedMobileAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
