<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShift
 */
class OpenShift
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the creator of the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Draft changes in the openShift are only visible to managers until they're shared.
     * @var OpenShiftItem|\stdClass|null
     */
    public mixed $draftOpenShift = null;

    /** The openShift is marked for deletion, a process that is finalized when the schedule is shared. */
    public ?bool $isStagedForDeletion = null;

    /** The ID of the schedulingGroup that contains the openShift. */
    public ?string $schedulingGroupId = null;

    /** 
     * The shared version of this openShift that is viewable by both employees and managers.
     * @var OpenShiftItem|\stdClass|null
     */
    public mixed $sharedOpenShift = null;


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
        if (isset($data['draftOpenShift'])) {
            $this->draftOpenShift = is_array($data['draftOpenShift']) ? new OpenShiftItem($data['draftOpenShift']) : $data['draftOpenShift'];
        }
        if (isset($data['isStagedForDeletion'])) {
            $this->isStagedForDeletion = $data['isStagedForDeletion'];
        }
        if (isset($data['schedulingGroupId'])) {
            $this->schedulingGroupId = $data['schedulingGroupId'];
        }
        if (isset($data['sharedOpenShift'])) {
            $this->sharedOpenShift = is_array($data['sharedOpenShift']) ? new OpenShiftItem($data['sharedOpenShift']) : $data['sharedOpenShift'];
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
