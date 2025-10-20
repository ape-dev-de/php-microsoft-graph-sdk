<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntitlementManagement resources
 *
 * Available select fields:
 * - accessPackageAssignmentApprovals
 * - accessPackages
 * - assignmentPolicies
 * - assignmentRequests
 * - assignments
 * - catalogs
 * - connectedOrganizations
 * - resourceEnvironments
 * - resourceRequests
 * - resourceRoleScopes
 * - resources
 * - settings
 */
class EntitlementManagementQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_PACKAGE_ASSIGNMENT_APPROVALS = 'accessPackageAssignmentApprovals';
    public const FIELD_ACCESS_PACKAGES = 'accessPackages';
    public const FIELD_ASSIGNMENT_POLICIES = 'assignmentPolicies';
    public const FIELD_ASSIGNMENT_REQUESTS = 'assignmentRequests';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_CATALOGS = 'catalogs';
    public const FIELD_CONNECTED_ORGANIZATIONS = 'connectedOrganizations';
    public const FIELD_RESOURCE_ENVIRONMENTS = 'resourceEnvironments';
    public const FIELD_RESOURCE_REQUESTS = 'resourceRequests';
    public const FIELD_RESOURCE_ROLE_SCOPES = 'resourceRoleScopes';
    public const FIELD_RESOURCES = 'resources';
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific EntitlementManagement properties
     * 
     * @param array<string> $select Use EntitlementManagementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
