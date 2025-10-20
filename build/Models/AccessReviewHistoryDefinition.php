<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewHistoryDefinition
 */
class AccessReviewHistoryDefinition
{
    /**
     */
    private ?string $createdBy;

    /**
     * Timestamp when the access review definition was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Determines which review decisions will be included in the fetched review history data if specified. Optional on create. All decisions are included by default if no decisions are provided on create. Possible values are: approve, deny, dontKnow, notReviewed, and notNotified.
     */
    private array $decisions = [];

    /**
     * Name for the access review history data collection. Required.
     */
    private ?string $displayName;

    /**
     * A timestamp. Reviews ending on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined.
     */
    private ?\DateTimeInterface $reviewHistoryPeriodEndDateTime;

    /**
     * A timestamp. Reviews starting on or before this date will be included in the fetched history data. Only required if scheduleSettings isn't defined.
     */
    private ?\DateTimeInterface $reviewHistoryPeriodStartDateTime;

    /**
     * The settings for a recurring access review history definition series. Only required if reviewHistoryPeriodStartDateTime or reviewHistoryPeriodEndDateTime aren't defined. Not supported yet.
     */
    private ?string $scheduleSettings;

    /**
     * Used to scope what reviews are included in the fetched history data. Fetches reviews whose scope matches with this provided scope. Required.
     */
    private array $scopes = [];

    /**
     * Represents the status of the review history data collection. The possible values are: done, inProgress, error, requested, unknownFutureValue.
     */
    private ?string $status;

    /**
     * If the accessReviewHistoryDefinition is a recurring definition, instances represent each recurrence. A definition that doesn''t recur will have exactly one instance.
     */
    private ?string $instances;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDecisions(): array
    {
        return $this->decisions;
    }

    public function setDecisions(array $decisions): self
    {
        $this->decisions = $decisions;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
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

    public function getScheduleSettings(): ?string
    {
        return $this->scheduleSettings;
    }

    public function setScheduleSettings(?string $scheduleSettings): self
    {
        $this->scheduleSettings = $scheduleSettings;
        return $this;
    }

    public function getScopes(): array
    {
        return $this->scopes;
    }

    public function setScopes(array $scopes): self
    {
        $this->scopes = $scopes;
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

    public function getInstances(): ?string
    {
        return $this->instances;
    }

    public function setInstances(?string $instances): self
    {
        $this->instances = $instances;
        return $this;
    }

}
