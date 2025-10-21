<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationAssignment resources
 *
 * Available select fields:
 * - target
 */
class ManagedDeviceMobileAppConfigurationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationAssignment
     */
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
