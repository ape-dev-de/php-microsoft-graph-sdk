<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCustomConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSCustomConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSCustomConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSCustomConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
