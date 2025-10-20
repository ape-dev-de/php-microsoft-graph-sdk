<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCustomConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidWorkProfileCustomConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidWorkProfileCustomConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidWorkProfileCustomConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
