<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessGuestsOrExternalUsers resources
 *
 * Available select fields:
 * - externalTenants
 * - guestOrExternalUserTypes
 */
class ConditionalAccessGuestsOrExternalUsersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessGuestsOrExternalUsers
     */
    public const FIELD_EXTERNAL_TENANTS = 'externalTenants';
    public const FIELD_GUEST_OR_EXTERNAL_USER_TYPES = 'guestOrExternalUserTypes';

    /**
     * Select specific ConditionalAccessGuestsOrExternalUsers properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
