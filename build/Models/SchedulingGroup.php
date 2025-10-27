<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchedulingGroup
 */
class SchedulingGroup
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the creator of the entity.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The code for the schedulingGroup to represent an external identifier. This field must be unique within the team in Microsoft Teams and uses an alphanumeric format, with a maximum of 100 characters. */
    public ?string $code = null;

    /** The display name for the schedulingGroup. Required. */
    public ?string $displayName = null;

    /** Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required. */
    public ?bool $isActive = null;

    /** 
     * The list of user IDs that are a member of the schedulingGroup. Required.
     * @var string[]
     */
    public array $userIds = [];


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['code'])) {
            $this->code = $data['code'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isActive'])) {
            $this->isActive = is_bool($data['isActive']) ? $data['isActive'] : (bool)$data['isActive'];
        }
        if (isset($data['userIds'])) {
            $this->userIds = $data['userIds'];
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
