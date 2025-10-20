<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationAssignment resources
 *
 * Available select fields:
 * - target
 */
class DeviceConfigurationAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific DeviceConfigurationAssignment properties
     * 
     * @param array<string> $select Use DeviceConfigurationAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
