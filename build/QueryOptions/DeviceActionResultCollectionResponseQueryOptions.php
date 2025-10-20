<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceActionResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceActionResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceActionResultCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceActionResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
