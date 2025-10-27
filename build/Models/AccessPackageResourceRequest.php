<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRequest
 */
class AccessPackageResourceRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource.
     * @var AccessPackageRequestType|\stdClass|null
     */
    public AccessPackageRequestType|\stdClass|null $requestType = null;

    /** 
     * The outcome of whether the service was able to add the resource to the catalog. The value is delivered if the resource was added or removed, and deliveryFailed if it couldn't be added or removed. Read-only.
     * @var AccessPackageRequestState|\stdClass|null
     */
    public AccessPackageRequestState|\stdClass|null $state = null;

    /** 
     * 
     * @var AccessPackageCatalog|\stdClass|null
     */
    public AccessPackageCatalog|\stdClass|null $catalog = null;

    /** 
     * 
     * @var AccessPackageResource|\stdClass|null
     */
    public AccessPackageResource|\stdClass|null $resource = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['requestType'])) {
            $this->requestType = is_string($data['requestType']) ? AccessPackageRequestType::tryFrom($data['requestType']) : $data['requestType'];
        }
        if (isset($data['state'])) {
            $this->state = is_string($data['state']) ? AccessPackageRequestState::tryFrom($data['state']) : $data['state'];
        }
        if (isset($data['catalog'])) {
            $this->catalog = is_array($data['catalog']) ? new AccessPackageCatalog($data['catalog']) : $data['catalog'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new AccessPackageResource($data['resource']) : $data['resource'];
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
