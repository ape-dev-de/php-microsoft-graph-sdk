<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrincipalResourceMembershipsScope resources
 *
 * Available select fields:
 * - principalScopes
 * - resourceScopes
 */
class PrincipalResourceMembershipsScopeQueryOptions extends QueryOptions
{
    public const FIELD_PRINCIPAL_SCOPES = 'principalScopes';
    public const FIELD_RESOURCE_SCOPES = 'resourceScopes';

    /**
     * Select specific PrincipalResourceMembershipsScope properties
     * 
     * @param array<string> $select Use PrincipalResourceMembershipsScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
