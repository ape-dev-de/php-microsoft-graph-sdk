<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceUserStatus resources
 *
 * Available select fields:
 */
class DeviceComplianceUserStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceUserStatus
     */

    /**
     * Select specific DeviceComplianceUserStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
