<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationJoinRequestTransitionDetails resources
 *
 * Available select fields:
 * - desiredMemberState
 * - details
 * - status
 */
class MultiTenantOrganizationJoinRequestTransitionDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationJoinRequestTransitionDetails
     */
    public const FIELD_DESIRED_MEMBER_STATE = 'desiredMemberState';
    public const FIELD_DETAILS = 'details';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific MultiTenantOrganizationJoinRequestTransitionDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
