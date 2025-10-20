<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosGeneralDeviceConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosGeneralDeviceConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosGeneralDeviceConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use IosGeneralDeviceConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
