<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCatalog
 */
class AccessPackageCatalog
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     * @var AccessPackageCatalogType|\stdClass|null
     */
    public mixed $catalogType = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The description of the access package catalog. */
    public ?string $description = null;

    /** The display name of the access package catalog. */
    public ?string $displayName = null;

    /** Whether the access packages in this catalog can be requested by users outside of the tenant. */
    public ?bool $isExternallyVisible = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     * @var AccessPackageCatalogState|\stdClass|null
     */
    public mixed $state = null;

    /** 
     * The access packages in this catalog. Read-only. Nullable.
     * @var AccessPackage[]
     */
    public array $accessPackages = [];

    /** 
     * 
     * @var CustomCalloutExtension[]
     */
    public array $customWorkflowExtensions = [];

    /** 
     * 
     * @var AccessPackageResourceRole[]
     */
    public array $resourceRoles = [];

    /** 
     * Access package resources in this catalog.
     * @var AccessPackageResource[]
     */
    public array $resources = [];

    /** 
     * 
     * @var AccessPackageResourceScope[]
     */
    public array $resourceScopes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['catalogType'])) {
            $this->catalogType = $data['catalogType'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isExternallyVisible'])) {
            $this->isExternallyVisible = $data['isExternallyVisible'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['accessPackages'])) {
            $this->accessPackages = $data['accessPackages'];
        }
        if (isset($data['customWorkflowExtensions'])) {
            $this->customWorkflowExtensions = $data['customWorkflowExtensions'];
        }
        if (isset($data['resourceRoles'])) {
            $this->resourceRoles = $data['resourceRoles'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
        if (isset($data['resourceScopes'])) {
            $this->resourceScopes = $data['resourceScopes'];
        }
    }
}
