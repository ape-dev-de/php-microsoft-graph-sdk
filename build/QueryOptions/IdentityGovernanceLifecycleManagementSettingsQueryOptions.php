<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceLifecycleManagementSettings resources
 *
 * Available select fields:
 */
class IdentityGovernanceLifecycleManagementSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceLifecycleManagementSettings
     */

    /**
     * Select specific IdentityGovernanceLifecycleManagementSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
