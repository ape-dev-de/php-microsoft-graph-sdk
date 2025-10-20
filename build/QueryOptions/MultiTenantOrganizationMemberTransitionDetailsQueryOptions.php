<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMemberTransitionDetails resources
 *
 * Available select fields:
 * - desiredRole
 * - desiredState
 * - details
 * - status
 */
class MultiTenantOrganizationMemberTransitionDetailsQueryOptions extends QueryOptions
{
    public const FIELD_DESIRED_ROLE = 'desiredRole';
    public const FIELD_DESIRED_STATE = 'desiredState';
    public const FIELD_DETAILS = 'details';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific MultiTenantOrganizationMemberTransitionDetails properties
     * 
     * @param array<string> $select Use MultiTenantOrganizationMemberTransitionDetailsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
