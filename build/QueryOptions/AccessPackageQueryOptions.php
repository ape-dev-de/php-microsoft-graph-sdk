<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackage resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - isHidden
 * - modifiedDateTime
 * - accessPackagesIncompatibleWith
 * - assignmentPolicies
 * - catalog
 * - incompatibleAccessPackages
 * - incompatibleGroups
 * - resourceRoleScopes
 */
class AccessPackageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackage
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_HIDDEN = 'isHidden';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_ACCESS_PACKAGES_INCOMPATIBLE_WITH = 'accessPackagesIncompatibleWith';
    public const FIELD_ASSIGNMENT_POLICIES = 'assignmentPolicies';
    public const FIELD_CATALOG = 'catalog';
    public const FIELD_INCOMPATIBLE_ACCESS_PACKAGES = 'incompatibleAccessPackages';
    public const FIELD_INCOMPATIBLE_GROUPS = 'incompatibleGroups';
    public const FIELD_RESOURCE_ROLE_SCOPES = 'resourceRoleScopes';

    /**
     * Select specific AccessPackage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
