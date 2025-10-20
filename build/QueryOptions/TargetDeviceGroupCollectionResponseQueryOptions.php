<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetDeviceGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TargetDeviceGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TargetDeviceGroupCollectionResponse properties
     * 
     * @param array<string> $select Use TargetDeviceGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
