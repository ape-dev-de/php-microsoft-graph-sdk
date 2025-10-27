<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityHistoryItem
 */
class ActivityHistoryItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Optional. The duration of active user engagement. if not supplied, this is calculated from the startedDateTime and lastActiveDateTime. */
    public ?float $activeDurationSeconds = null;

    /** Set by the server. DateTime in UTC when the object was created on the server. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Optional. UTC DateTime when the activityHistoryItem will undergo hard-delete. Can be set by the client. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Optional. UTC DateTime when the activityHistoryItem (activity session) was last understood as active or finished - if null, activityHistoryItem status should be Ongoing. */
    public ?\DateTimeInterface $lastActiveDateTime = null;

    /** Set by the server. DateTime in UTC when the object was modified on the server. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Required. UTC DateTime when the activityHistoryItem (activity session) was started. Required for timeline history. */
    public ?\DateTimeInterface $startedDateTime = null;

    /** 
     * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
     * @var Status|\stdClass|null
     */
    public Status|\stdClass|null $status = null;

    /** Optional. The timezone in which the user's device used to generate the activity was located at activity creation time. Values supplied as Olson IDs in order to support cross-platform representation. */
    public ?string $userTimezone = null;

    /**  */
    public ?UserActivity $activity = null;


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
        if (isset($data['activeDurationSeconds'])) {
            $this->activeDurationSeconds = is_numeric($data['activeDurationSeconds']) ? (float)$data['activeDurationSeconds'] : $data['activeDurationSeconds'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['lastActiveDateTime'])) {
            $this->lastActiveDateTime = is_string($data['lastActiveDateTime']) ? new \DateTimeImmutable($data['lastActiveDateTime']) : $data['lastActiveDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['startedDateTime'])) {
            $this->startedDateTime = is_string($data['startedDateTime']) ? new \DateTimeImmutable($data['startedDateTime']) : $data['startedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new Status($data['status']) : $data['status'];
        }
        if (isset($data['userTimezone'])) {
            $this->userTimezone = $data['userTimezone'];
        }
        if (isset($data['activity'])) {
            $this->activity = is_array($data['activity']) ? new UserActivity($data['activity']) : $data['activity'];
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
