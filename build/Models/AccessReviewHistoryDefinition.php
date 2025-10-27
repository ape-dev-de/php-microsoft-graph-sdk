<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryDefinition
 */
class AccessReviewHistoryDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?UserIdentity $createdBy = null;

    /** Timestamp when the access review definition was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions are included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     * @var AccessReviewHistoryDecisionFilter[]
     */
    public array $decisions = [];

    /** Name for the access review history data collection. Required. */
    public ?string $displayName = null;

    /** A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined. */
    public ?\DateTimeInterface $reviewHistoryPeriodEndDateTime = null;

    /** A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined. */
    public ?\DateTimeInterface $reviewHistoryPeriodStartDateTime = null;

    /** 
     * The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime aren't defined. Not supported yet.
     * @var AccessReviewHistoryScheduleSettings|\stdClass|null
     */
    public mixed $scheduleSettings = null;

    /** 
     * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     * @var AccessReviewScope[]
     */
    public array $scopes = [];

    /** 
     * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     * @var AccessReviewHistoryStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that doesn't recur will have exactly one instance.
     * @var AccessReviewHistoryInstance[]
     */
    public array $instances = [];


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
            $this->createdBy = is_array($data['createdBy']) ? new UserIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['decisions'])) {
            $this->decisions = $data['decisions'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['reviewHistoryPeriodEndDateTime'])) {
            $this->reviewHistoryPeriodEndDateTime = is_string($data['reviewHistoryPeriodEndDateTime']) ? new \DateTimeImmutable($data['reviewHistoryPeriodEndDateTime']) : $data['reviewHistoryPeriodEndDateTime'];
        }
        if (isset($data['reviewHistoryPeriodStartDateTime'])) {
            $this->reviewHistoryPeriodStartDateTime = is_string($data['reviewHistoryPeriodStartDateTime']) ? new \DateTimeImmutable($data['reviewHistoryPeriodStartDateTime']) : $data['reviewHistoryPeriodStartDateTime'];
        }
        if (isset($data['scheduleSettings'])) {
            $this->scheduleSettings = is_array($data['scheduleSettings']) ? new AccessReviewHistoryScheduleSettings($data['scheduleSettings']) : $data['scheduleSettings'];
        }
        if (isset($data['scopes'])) {
            $this->scopes = $data['scopes'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new AccessReviewHistoryStatus($data['status']) : $data['status'];
        }
        if (isset($data['instances'])) {
            $this->instances = $data['instances'];
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
