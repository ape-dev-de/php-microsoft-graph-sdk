<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppleDeviceFeaturesConfigurationBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppleDeviceFeaturesConfigurationBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppleDeviceFeaturesConfigurationBaseCollectionResponse properties
     * 
     * @param array<string> $select Use AppleDeviceFeaturesConfigurationBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
