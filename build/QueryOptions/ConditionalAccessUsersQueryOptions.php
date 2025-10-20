<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessUsers resources
 *
 * Available select fields:
 * - excludeGroups
 * - excludeGuestsOrExternalUsers
 * - excludeRoles
 * - excludeUsers
 * - includeGroups
 * - includeGuestsOrExternalUsers
 * - includeRoles
 * - includeUsers
 */
class ConditionalAccessUsersQueryOptions extends QueryOptions
{
    public const FIELD_EXCLUDE_GROUPS = 'excludeGroups';
    public const FIELD_EXCLUDE_GUESTS_OR_EXTERNAL_USERS = 'excludeGuestsOrExternalUsers';
    public const FIELD_EXCLUDE_ROLES = 'excludeRoles';
    public const FIELD_EXCLUDE_USERS = 'excludeUsers';
    public const FIELD_INCLUDE_GROUPS = 'includeGroups';
    public const FIELD_INCLUDE_GUESTS_OR_EXTERNAL_USERS = 'includeGuestsOrExternalUsers';
    public const FIELD_INCLUDE_ROLES = 'includeRoles';
    public const FIELD_INCLUDE_USERS = 'includeUsers';

    /**
     * Select specific ConditionalAccessUsers properties
     * 
     * @param array<string> $select Use ConditionalAccessUsersQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
