<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackage
 */
class AccessPackage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the access package. */
    public ?string $description = null;

    /** Required. The display name of the access package. Supports $filter (eq, contains). */
    public ?string $displayName = null;

    /** Indicates whether the access package is hidden from the requestor. */
    public ?bool $isHidden = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * The access packages that are incompatible with this package. Read-only.
     * @var AccessPackage[]
     */
    public array $accessPackagesIncompatibleWith = [];

    /** 
     * Read-only. Nullable. Supports $expand.
     * @var AccessPackageAssignmentPolicy[]
     */
    public array $assignmentPolicies = [];

    /** 
     * Required when creating the access package. Read-only. Nullable.
     * @var AccessPackageCatalog|\stdClass|null
     */
    public mixed $catalog = null;

    /** 
     * The access packages whose assigned users are ineligible to be assigned this access package.
     * @var AccessPackage[]
     */
    public array $incompatibleAccessPackages = [];

    /** 
     * The groups whose members are ineligible to be assigned this access package.
     * @var Group[]
     */
    public array $incompatibleGroups = [];

    /** 
     * The resource roles and scopes in this access package.
     * @var AccessPackageResourceRoleScope[]
     */
    public array $resourceRoleScopes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isHidden'])) {
            $this->isHidden = $data['isHidden'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['accessPackagesIncompatibleWith'])) {
            $this->accessPackagesIncompatibleWith = $data['accessPackagesIncompatibleWith'];
        }
        if (isset($data['assignmentPolicies'])) {
            $this->assignmentPolicies = $data['assignmentPolicies'];
        }
        if (isset($data['catalog'])) {
            $this->catalog = is_array($data['catalog']) ? new AccessPackageCatalog($data['catalog']) : $data['catalog'];
        }
        if (isset($data['incompatibleAccessPackages'])) {
            $this->incompatibleAccessPackages = $data['incompatibleAccessPackages'];
        }
        if (isset($data['incompatibleGroups'])) {
            $this->incompatibleGroups = $data['incompatibleGroups'];
        }
        if (isset($data['resourceRoleScopes'])) {
            $this->resourceRoleScopes = $data['resourceRoleScopes'];
        }
    }
}
