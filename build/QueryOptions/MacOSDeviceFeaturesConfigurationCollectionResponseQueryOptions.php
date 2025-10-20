<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSDeviceFeaturesConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MacOSDeviceFeaturesConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MacOSDeviceFeaturesConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use MacOSDeviceFeaturesConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
