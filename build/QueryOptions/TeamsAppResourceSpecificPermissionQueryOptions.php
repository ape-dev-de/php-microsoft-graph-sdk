<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppResourceSpecificPermission resources
 *
 * Available select fields:
 * - permissionType
 * - permissionValue
 */
class TeamsAppResourceSpecificPermissionQueryOptions extends QueryOptions
{
    public const FIELD_PERMISSION_TYPE = 'permissionType';
    public const FIELD_PERMISSION_VALUE = 'permissionValue';

    /**
     * Select specific TeamsAppResourceSpecificPermission properties
     * 
     * @param array<string> $select Use TeamsAppResourceSpecificPermissionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
