<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageCatalog resources
 *
 * Available select fields:
 * - catalogType
 * - createdDateTime
 * - description
 * - displayName
 * - isExternallyVisible
 * - modifiedDateTime
 * - state
 * - accessPackages
 * - customWorkflowExtensions
 * - resourceRoles
 * - resources
 * - resourceScopes
 */
class AccessPackageCatalogQueryOptions extends QueryOptions
{
    public const FIELD_CATALOG_TYPE = 'catalogType';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_EXTERNALLY_VISIBLE = 'isExternallyVisible';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_STATE = 'state';
    public const FIELD_ACCESS_PACKAGES = 'accessPackages';
    public const FIELD_CUSTOM_WORKFLOW_EXTENSIONS = 'customWorkflowExtensions';
    public const FIELD_RESOURCE_ROLES = 'resourceRoles';
    public const FIELD_RESOURCES = 'resources';
    public const FIELD_RESOURCE_SCOPES = 'resourceScopes';

    /**
     * Select specific AccessPackageCatalog properties
     * 
     * @param array<string> $select Use AccessPackageCatalogQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
