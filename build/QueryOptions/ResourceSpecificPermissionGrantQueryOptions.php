<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceSpecificPermissionGrant resources
 *
 * Available select fields:
 * - clientAppId
 * - clientId
 * - permission
 * - permissionType
 * - resourceAppId
 */
class ResourceSpecificPermissionGrantQueryOptions extends QueryOptions
{
    public const FIELD_CLIENT_APP_ID = 'clientAppId';
    public const FIELD_CLIENT_ID = 'clientId';
    public const FIELD_PERMISSION = 'permission';
    public const FIELD_PERMISSION_TYPE = 'permissionType';
    public const FIELD_RESOURCE_APP_ID = 'resourceAppId';

    /**
     * Select specific ResourceSpecificPermissionGrant properties
     * 
     * @param array<string> $select Use ResourceSpecificPermissionGrantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
