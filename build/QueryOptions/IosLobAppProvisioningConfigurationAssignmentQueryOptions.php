<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobAppProvisioningConfigurationAssignment resources
 *
 * Available select fields:
 */
class IosLobAppProvisioningConfigurationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosLobAppProvisioningConfigurationAssignment
     */

    /**
     * Select specific IosLobAppProvisioningConfigurationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
