<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EntitlementManagement
 */
class EntitlementManagement
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Approval stages for decisions associated with access package assignment requests.
     * @var Approval[]
     */
    public array $accessPackageAssignmentApprovals = [];

    /** 
     * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     * @var AccessPackage[]
     */
    public array $accessPackages = [];

    /** 
     * Access package assignment policies govern which subjects can request or be assigned an access package via an access package assignment.
     * @var AccessPackageAssignmentPolicy[]
     */
    public array $assignmentPolicies = [];

    /** 
     * Access package assignment requests created by or on behalf of a subject.
     * @var AccessPackageAssignmentRequest[]
     */
    public array $assignmentRequests = [];

    /** 
     * The assignment of an access package to a subject for a period of time.
     * @var AccessPackageAssignment[]
     */
    public array $assignments = [];

    /** 
     * A container for access packages.
     * @var AccessPackageCatalog[]
     */
    public array $catalogs = [];

    /** 
     * References to a directory or domain of another organization whose users can request access.
     * @var ConnectedOrganization[]
     */
    public array $connectedOrganizations = [];

    /** 
     * A reference to the geolocation environments in which a resource is located.
     * @var AccessPackageResourceEnvironment[]
     */
    public array $resourceEnvironments = [];

    /** 
     * Represents a request to add or remove a resource to or from a catalog respectively.
     * @var AccessPackageResourceRequest[]
     */
    public array $resourceRequests = [];

    /** 
     * 
     * @var AccessPackageResourceRoleScope[]
     */
    public array $resourceRoleScopes = [];

    /** 
     * The resources associated with the catalogs.
     * @var AccessPackageResource[]
     */
    public array $resources = [];

    /** 
     * The settings that control the behavior of Microsoft Entra entitlement management.
     * @var EntitlementManagementSettings|\stdClass|null
     */
    public mixed $settings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['accessPackageAssignmentApprovals'])) {
            $this->accessPackageAssignmentApprovals = $data['accessPackageAssignmentApprovals'];
        }
        if (isset($data['accessPackages'])) {
            $this->accessPackages = $data['accessPackages'];
        }
        if (isset($data['assignmentPolicies'])) {
            $this->assignmentPolicies = $data['assignmentPolicies'];
        }
        if (isset($data['assignmentRequests'])) {
            $this->assignmentRequests = $data['assignmentRequests'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['catalogs'])) {
            $this->catalogs = $data['catalogs'];
        }
        if (isset($data['connectedOrganizations'])) {
            $this->connectedOrganizations = $data['connectedOrganizations'];
        }
        if (isset($data['resourceEnvironments'])) {
            $this->resourceEnvironments = $data['resourceEnvironments'];
        }
        if (isset($data['resourceRequests'])) {
            $this->resourceRequests = $data['resourceRequests'];
        }
        if (isset($data['resourceRoleScopes'])) {
            $this->resourceRoleScopes = $data['resourceRoleScopes'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new EntitlementManagementSettings($data['settings']) : $data['settings'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
