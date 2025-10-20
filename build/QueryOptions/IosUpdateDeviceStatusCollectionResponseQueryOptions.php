<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosUpdateDeviceStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IosUpdateDeviceStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IosUpdateDeviceStatusCollectionResponse properties
     * 
     * @param array<string> $select Use IosUpdateDeviceStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
