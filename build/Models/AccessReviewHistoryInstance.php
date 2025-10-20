<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryInstance
 */
class AccessReviewHistoryInstance
{
    /**
     * Uri that can be used to retrieve review history data. This URI will be active for 24 hours after being generated. Required.
     */
    private ?string $downloadUri;

    /**
     * Timestamp when this instance and associated data expires and the history is deleted. Required.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Timestamp when all of the available data for this instance was collected and is set after this instance's status is set to done. Required.
     */
    private ?\DateTimeInterface $fulfilledDateTime;

    /**
     * Timestamp reviews ending on or before this date will be included in the fetched history data.
     */
    private ?\DateTimeInterface $reviewHistoryPeriodEndDateTime;

    /**
     * Timestamp reviews starting on or after this date will be included in the fetched history data.
     */
    private ?\DateTimeInterface $reviewHistoryPeriodStartDateTime;

    /**
     * Timestamp when the instance's history data is scheduled to be generated.
     */
    private ?\DateTimeInterface $runDateTime;

    /**
     * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue. Once the status has been marked as done, a link can be generated to retrieve the instance''s data by calling generateDownloadUri method.
     */
    private ?string $status;

    public function getDownloadUri(): ?string
    {
        return $this->downloadUri;
    }

    public function setDownloadUri(?string $downloadUri): self
    {
        $this->downloadUri = $downloadUri;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getFulfilledDateTime(): ?\DateTimeInterface
    {
        return $this->fulfilledDateTime;
    }

    public function setFulfilledDateTime(?\DateTimeInterface $fulfilledDateTime): self
    {
        $this->fulfilledDateTime = $fulfilledDateTime;
        return $this;
    }

    public function getReviewHistoryPeriodEndDateTime(): ?\DateTimeInterface
    {
        return $this->reviewHistoryPeriodEndDateTime;
    }

    public function setReviewHistoryPeriodEndDateTime(?\DateTimeInterface $reviewHistoryPeriodEndDateTime): self
    {
        $this->reviewHistoryPeriodEndDateTime = $reviewHistoryPeriodEndDateTime;
        return $this;
    }

    public function getReviewHistoryPeriodStartDateTime(): ?\DateTimeInterface
    {
        return $this->reviewHistoryPeriodStartDateTime;
    }

    public function setReviewHistoryPeriodStartDateTime(?\DateTimeInterface $reviewHistoryPeriodStartDateTime): self
    {
        $this->reviewHistoryPeriodStartDateTime = $reviewHistoryPeriodStartDateTime;
        return $this;
    }

    public function getRunDateTime(): ?\DateTimeInterface
    {
        return $this->runDateTime;
    }

    public function setRunDateTime(?\DateTimeInterface $runDateTime): self
    {
        $this->runDateTime = $runDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
