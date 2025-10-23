<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRequest
 */
class AccessPackageResourceRequest
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource.
     * @var AccessPackageRequestType|\stdClass|null
     */
    public mixed $requestType = null;

    /** 
     * The outcome of whether the service was able to add the resource to the catalog. The value is delivered if the resource was added or removed, and deliveryFailed if it couldn't be added or removed. Read-only.
     * @var AccessPackageRequestState|\stdClass|null
     */
    public mixed $state = null;

    /** 
     * 
     * @var AccessPackageCatalog|\stdClass|null
     */
    public mixed $catalog = null;

    /** 
     * 
     * @var AccessPackageResource|\stdClass|null
     */
    public mixed $resource = null;


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
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['requestType'])) {
            $this->requestType = $data['requestType'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['catalog'])) {
            $this->catalog = $data['catalog'];
        }
        if (isset($data['resource'])) {
            $this->resource = $data['resource'];
        }
    }
}
