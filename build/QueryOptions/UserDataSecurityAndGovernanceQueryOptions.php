<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserDataSecurityAndGovernance resources
 *
 * Available select fields:
 * - activities
 * - protectionScopes
 */
class UserDataSecurityAndGovernanceQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITIES = 'activities';
    public const FIELD_PROTECTION_SCOPES = 'protectionScopes';

    /**
     * Select specific UserDataSecurityAndGovernance properties
     * 
     * @param array<string> $select Use UserDataSecurityAndGovernanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
