<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationJoinRequestRecord resources
 *
 * Available select fields:
 * - addedByTenantId
 * - memberState
 * - role
 * - transitionDetails
 */
class MultiTenantOrganizationJoinRequestRecordQueryOptions extends QueryOptions
{
    public const FIELD_ADDED_BY_TENANT_ID = 'addedByTenantId';
    public const FIELD_MEMBER_STATE = 'memberState';
    public const FIELD_ROLE = 'role';
    public const FIELD_TRANSITION_DETAILS = 'transitionDetails';

    /**
     * Select specific MultiTenantOrganizationJoinRequestRecord properties
     * 
     * @param array<string> $select Use MultiTenantOrganizationJoinRequestRecordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
