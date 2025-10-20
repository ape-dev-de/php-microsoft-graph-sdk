<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarPermission resources
 *
 * Available select fields:
 * - allowedRoles
 * - emailAddress
 * - isInsideOrganization
 * - isRemovable
 * - role
 */
class CalendarPermissionQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_ROLES = 'allowedRoles';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_IS_INSIDE_ORGANIZATION = 'isInsideOrganization';
    public const FIELD_IS_REMOVABLE = 'isRemovable';
    public const FIELD_ROLE = 'role';

    /**
     * Select specific CalendarPermission properties
     * 
     * @param array<string> $select Use CalendarPermissionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
