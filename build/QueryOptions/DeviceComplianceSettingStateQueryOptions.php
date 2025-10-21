<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceSettingState resources
 *
 * Available select fields:
 */
class DeviceComplianceSettingStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceSettingState
     */

    /**
     * Select specific DeviceComplianceSettingState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
