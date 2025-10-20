<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobAppProvisioningConfigurationAssignment resources
 *
 * Available select fields:
 * - target
 */
class IosLobAppProvisioningConfigurationAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific IosLobAppProvisioningConfigurationAssignment properties
     * 
     * @param array<string> $select Use IosLobAppProvisioningConfigurationAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
