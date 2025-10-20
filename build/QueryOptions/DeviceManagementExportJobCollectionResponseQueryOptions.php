<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExportJobCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceManagementExportJobCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceManagementExportJobCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceManagementExportJobCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
