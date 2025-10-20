<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCustomConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosCustomConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosCustomConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use IosCustomConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
