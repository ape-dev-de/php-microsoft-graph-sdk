<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSIncludedAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSIncludedAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSIncludedAppCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSIncludedAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
