<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileGeneralDeviceConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AndroidWorkProfileGeneralDeviceConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AndroidWorkProfileGeneralDeviceConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use AndroidWorkProfileGeneralDeviceConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
