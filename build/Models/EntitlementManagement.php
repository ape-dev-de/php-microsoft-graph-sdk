<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagement
 */
class EntitlementManagement
{
    /**
     * Approval stages for decisions associated with access package assignment requests.
     */
    private array $accessPackageAssignmentApprovals = [];

    /**
     * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     */
    private array $accessPackages = [];

    /**
     * Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
     */
    private array $assignmentPolicies = [];

    /**
     * Access package assignment requests created by or on behalf of a subject.
     */
    private array $assignmentRequests = [];

    /**
     * The assignment of an access package to a subject for a period of time.
     */
    private array $assignments = [];

    /**
     * A container for access packages.
     */
    private array $catalogs = [];

    /**
     * References to a directory or domain of another organization whose users can request access.
     */
    private array $connectedOrganizations = [];

    /**
     * A reference to the geolocation environments in which a resource is located.
     */
    private array $resourceEnvironments = [];

    /**
     * Represents a request to add or remove a resource to or from a catalog respectively.
     */
    private array $resourceRequests = [];

    /**
     */
    private array $resourceRoleScopes = [];

    /**
     * The resources associated with the catalogs.
     */
    private array $resources = [];

    /**
     * The settings that control the behavior of Microsoft Entra entitlement management.
     */
    private ?string $settings;

    public function getAccessPackageAssignmentApprovals(): array
    {
        return $this->accessPackageAssignmentApprovals;
    }

    public function setAccessPackageAssignmentApprovals(array $accessPackageAssignmentApprovals): self
    {
        $this->accessPackageAssignmentApprovals = $accessPackageAssignmentApprovals;
        return $this;
    }

    public function getAccessPackages(): array
    {
        return $this->accessPackages;
    }

    public function setAccessPackages(array $accessPackages): self
    {
        $this->accessPackages = $accessPackages;
        return $this;
    }

    public function getAssignmentPolicies(): array
    {
        return $this->assignmentPolicies;
    }

    public function setAssignmentPolicies(array $assignmentPolicies): self
    {
        $this->assignmentPolicies = $assignmentPolicies;
        return $this;
    }

    public function getAssignmentRequests(): array
    {
        return $this->assignmentRequests;
    }

    public function setAssignmentRequests(array $assignmentRequests): self
    {
        $this->assignmentRequests = $assignmentRequests;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getCatalogs(): array
    {
        return $this->catalogs;
    }

    public function setCatalogs(array $catalogs): self
    {
        $this->catalogs = $catalogs;
        return $this;
    }

    public function getConnectedOrganizations(): array
    {
        return $this->connectedOrganizations;
    }

    public function setConnectedOrganizations(array $connectedOrganizations): self
    {
        $this->connectedOrganizations = $connectedOrganizations;
        return $this;
    }

    public function getResourceEnvironments(): array
    {
        return $this->resourceEnvironments;
    }

    public function setResourceEnvironments(array $resourceEnvironments): self
    {
        $this->resourceEnvironments = $resourceEnvironments;
        return $this;
    }

    public function getResourceRequests(): array
    {
        return $this->resourceRequests;
    }

    public function setResourceRequests(array $resourceRequests): self
    {
        $this->resourceRequests = $resourceRequests;
        return $this;
    }

    public function getResourceRoleScopes(): array
    {
        return $this->resourceRoleScopes;
    }

    public function setResourceRoleScopes(array $resourceRoleScopes): self
    {
        $this->resourceRoleScopes = $resourceRoleScopes;
        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

}
