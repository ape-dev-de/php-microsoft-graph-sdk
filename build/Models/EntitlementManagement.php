<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagement
 */
class EntitlementManagement
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Approval stages for decisions associated with access package assignment requests. */
        public array $accessPackageAssignmentApprovals = [],
        /** Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources. */
        public array $accessPackages = [],
        /** Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment. */
        public array $assignmentPolicies = [],
        /** Access package assignment requests created by or on behalf of a subject. */
        public array $assignmentRequests = [],
        /** The assignment of an access package to a subject for a period of time. */
        public array $assignments = [],
        /** A container for access packages. */
        public array $catalogs = [],
        /** References to a directory or domain of another organization whose users can request access. */
        public array $connectedOrganizations = [],
        /** A reference to the geolocation environments in which a resource is located. */
        public array $resourceEnvironments = [],
        /** Represents a request to add or remove a resource to or from a catalog respectively. */
        public array $resourceRequests = [],
        /**  */
        public array $resourceRoleScopes = [],
        /** The resources associated with the catalogs. */
        public array $resources = [],
        /** The settings that control the behavior of Microsoft Entra entitlement management. */
        public ?EntitlementManagementSettings $settings = null
    ) {}
}
