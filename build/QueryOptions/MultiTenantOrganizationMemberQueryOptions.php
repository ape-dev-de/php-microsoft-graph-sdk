<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMember resources
 *
 * Available select fields:
 * - addedByTenantId
 * - addedDateTime
 * - displayName
 * - joinedDateTime
 * - role
 * - state
 * - tenantId
 * - transitionDetails
 */
class MultiTenantOrganizationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationMember
     */
    public const FIELD_ADDED_BY_TENANT_ID = 'addedByTenantId';
    public const FIELD_ADDED_DATE_TIME = 'addedDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_JOINED_DATE_TIME = 'joinedDateTime';
    public const FIELD_ROLE = 'role';
    public const FIELD_STATE = 'state';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TRANSITION_DETAILS = 'transitionDetails';

    /**
     * Select specific MultiTenantOrganizationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
