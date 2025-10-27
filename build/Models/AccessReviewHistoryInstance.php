<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryInstance
 */
class AccessReviewHistoryInstance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Uri that can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required. */
    public ?string $downloadUri = null;

    /** Timestamp when this instance and associated data expires and the history is deleted. Required. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** Timestamp when all of the available data for this instance was collected and is set after this instance's status is set to done. Required. */
    public ?\DateTimeInterface $fulfilledDateTime = null;

    /** Timestamp reviews ending on or before this date will be included in the fetched history data. */
    public ?\DateTimeInterface $reviewHistoryPeriodEndDateTime = null;

    /** Timestamp reviews starting on or after this date will be included in the fetched history data. */
    public ?\DateTimeInterface $reviewHistoryPeriodStartDateTime = null;

    /** Timestamp when the instance's history data is scheduled to be generated. */
    public ?\DateTimeInterface $runDateTime = null;

    /** 
     * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance's data by calling generateDownloadUri method.
     * @var AccessReviewHistoryStatus|\stdClass|null
     */
    public AccessReviewHistoryStatus|\stdClass|null $status = null;


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
        if (isset($data['downloadUri'])) {
            $this->downloadUri = $data['downloadUri'];
        }
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = is_string($data['expirationDateTime']) ? new \DateTimeImmutable($data['expirationDateTime']) : $data['expirationDateTime'];
        }
        if (isset($data['fulfilledDateTime'])) {
            $this->fulfilledDateTime = is_string($data['fulfilledDateTime']) ? new \DateTimeImmutable($data['fulfilledDateTime']) : $data['fulfilledDateTime'];
        }
        if (isset($data['reviewHistoryPeriodEndDateTime'])) {
            $this->reviewHistoryPeriodEndDateTime = is_string($data['reviewHistoryPeriodEndDateTime']) ? new \DateTimeImmutable($data['reviewHistoryPeriodEndDateTime']) : $data['reviewHistoryPeriodEndDateTime'];
        }
        if (isset($data['reviewHistoryPeriodStartDateTime'])) {
            $this->reviewHistoryPeriodStartDateTime = is_string($data['reviewHistoryPeriodStartDateTime']) ? new \DateTimeImmutable($data['reviewHistoryPeriodStartDateTime']) : $data['reviewHistoryPeriodStartDateTime'];
        }
        if (isset($data['runDateTime'])) {
            $this->runDateTime = is_string($data['runDateTime']) ? new \DateTimeImmutable($data['runDateTime']) : $data['runDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? AccessReviewHistoryStatus::tryFrom($data['status']) : $data['status'];
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
