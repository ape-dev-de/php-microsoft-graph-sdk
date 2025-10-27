<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceContainer
 */
class SecurityDataSourceContainer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Created date and time of the dataSourceContainer entity. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Display name of the dataSourceContainer entity. */
    public ?string $displayName = null;

    /** 
     * The hold status of the dataSourceContainer. The possible values are: notApplied, applied, applying, removing, partial
     * @var SecurityDataSourceHoldStatus|\stdClass|null
     */
    public mixed $holdStatus = null;

    /** Last modified date and time of the dataSourceContainer. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Date and time that the dataSourceContainer was released from the case. */
    public ?\DateTimeInterface $releasedDateTime = null;

    /** 
     * Latest status of the dataSourceContainer. Possible values are: Active, Released.
     * @var SecurityDataSourceContainerStatus|\stdClass|null
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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['holdStatus'])) {
            $this->holdStatus = is_array($data['holdStatus']) ? new SecurityDataSourceHoldStatus($data['holdStatus']) : $data['holdStatus'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['releasedDateTime'])) {
            $this->releasedDateTime = is_string($data['releasedDateTime']) ? new \DateTimeImmutable($data['releasedDateTime']) : $data['releasedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityDataSourceContainerStatus($data['status']) : $data['status'];
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
