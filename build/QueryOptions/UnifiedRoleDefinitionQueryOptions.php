<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleDefinition resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isBuiltIn
 * - isEnabled
 * - resourceScopes
 * - rolePermissions
 * - templateId
 * - version
 * - inheritsPermissionsFrom
 */
class UnifiedRoleDefinitionQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_BUILT_IN = 'isBuiltIn';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_RESOURCE_SCOPES = 'resourceScopes';
    public const FIELD_ROLE_PERMISSIONS = 'rolePermissions';
    public const FIELD_TEMPLATE_ID = 'templateId';
    public const FIELD_VERSION = 'version';
    public const FIELD_INHERITS_PERMISSIONS_FROM = 'inheritsPermissionsFrom';

    /**
     * Select specific UnifiedRoleDefinition properties
     * 
     * @param array<string> $select Use UnifiedRoleDefinitionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
