<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartnerAssignment resources
 *
 * Available select fields:
 * - target
 */
class DeviceManagementPartnerAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific DeviceManagementPartnerAssignment properties
     * 
     * @param array<string> $select Use DeviceManagementPartnerAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
