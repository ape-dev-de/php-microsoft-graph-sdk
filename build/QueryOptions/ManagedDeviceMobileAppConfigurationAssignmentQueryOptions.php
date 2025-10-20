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
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationAssignment properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
