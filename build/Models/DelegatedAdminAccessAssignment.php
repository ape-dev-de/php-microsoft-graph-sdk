<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessAssignment
 */
class DelegatedAdminAccessAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?DelegatedAdminAccessContainer $accessContainer = null;

    /**  */
    public ?DelegatedAdminAccessDetails $accessDetails = null;

    /** The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue.
     * @var DelegatedAdminAccessAssignmentStatus|\stdClass|null
     */
    public mixed $status = null;


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
        if (isset($data['accessContainer'])) {
            $this->accessContainer = is_array($data['accessContainer']) ? new DelegatedAdminAccessContainer($data['accessContainer']) : $data['accessContainer'];
        }
        if (isset($data['accessDetails'])) {
            $this->accessDetails = is_array($data['accessDetails']) ? new DelegatedAdminAccessDetails($data['accessDetails']) : $data['accessDetails'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new DelegatedAdminAccessAssignmentStatus($data['status']) : $data['status'];
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
