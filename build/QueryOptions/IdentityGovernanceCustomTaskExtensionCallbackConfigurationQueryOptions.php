<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCallbackConfiguration resources
 *
 * Available select fields:
 * - authorizedApps
 */
class IdentityGovernanceCustomTaskExtensionCallbackConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_AUTHORIZED_APPS = 'authorizedApps';

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCallbackConfiguration properties
     * 
     * @param array<string> $select Use IdentityGovernanceCustomTaskExtensionCallbackConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
