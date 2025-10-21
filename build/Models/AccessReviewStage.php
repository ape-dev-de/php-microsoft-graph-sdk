<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewStage
 */
class AccessReviewStage
{
    /**
     * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn''t exist, or manager is specified as reviewer but a user''s manager doesn''t exist.
     */
    private array $fallbackReviewers = [];

    /**
     * This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     */
    private array $reviewers = [];

    /**
     * The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only.
     */
    private ?string $status;

    /**
     * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
     * @var string[]
     */
    private array $decisions = [];


    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getFallbackReviewers(): array
    {
        return $this->fallbackReviewers;
    }

    public function setFallbackReviewers(array $fallbackReviewers): self
    {
        $this->fallbackReviewers = $fallbackReviewers;
        return $this;
    }

    public function getReviewers(): array
    {
        return $this->reviewers;
    }

    public function setReviewers(array $reviewers): self
    {
        $this->reviewers = $reviewers;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
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

    /**
     * @return string[]
     */
    public function getDecisions(): array
    {
        return $this->decisions;
    }

    /**
     * @param string[] $decisions
     */
    public function setDecisions(array $decisions): self
    {
        $this->decisions = $decisions;
        return $this;
    }

}
