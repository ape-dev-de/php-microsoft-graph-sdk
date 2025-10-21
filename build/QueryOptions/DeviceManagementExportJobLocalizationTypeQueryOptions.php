<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExportJobLocalizationType resources
 *
 * Available select fields:
 */
class DeviceManagementExportJobLocalizationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExportJobLocalizationType
     */

    /**
     * Select specific DeviceManagementExportJobLocalizationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
