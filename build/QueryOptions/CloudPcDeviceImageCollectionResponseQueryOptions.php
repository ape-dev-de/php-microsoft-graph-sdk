<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDeviceImageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcDeviceImageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcDeviceImageCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcDeviceImageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
