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
    /**
     * Available select fields for DeviceAndAppManagementData
     */
    public const FIELD_CONTENT = 'content';

    /**
     * Select specific DeviceAndAppManagementData properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
