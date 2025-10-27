<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRoleScope
 */
class AccessPackageResourceRoleScope
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * 
     * @var AccessPackageResourceRole|\stdClass|null
     */
    public AccessPackageResourceRole|\stdClass|null $role = null;

    /** 
     * 
     * @var AccessPackageResourceScope|\stdClass|null
     */
    public AccessPackageResourceScope|\stdClass|null $scope = null;


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
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new AccessPackageResourceRole($data['role']) : $data['role'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new AccessPackageResourceScope($data['scope']) : $data['scope'];
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
