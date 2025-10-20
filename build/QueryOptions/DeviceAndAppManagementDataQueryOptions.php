<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceAndAppManagementData resources
 *
 * Available select fields:
 * - content
 */
class DeviceAndAppManagementDataQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';

    /**
     * Select specific DeviceAndAppManagementData properties
     * 
     * @param array<string> $select Use DeviceAndAppManagementDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
