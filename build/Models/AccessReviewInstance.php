<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstance
 */
class AccessReviewInstance
{
    /**
     * DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user''s manager does not exist. Supports $select.
     */
    private array $fallbackReviewers = [];

    /**
     * This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     */
    private array $reviewers = [];

    /**
     * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
     */
    private ?string $scope;

    /**
     * DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only.
     */
    private ?string $status;

    /**
     * Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
     */
    private array $contactedReviewers = [];

    /**
     * Each user reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
     */
    private array $decisions = [];

    /**
     * If the instance has multiple stages, this returns the collection of stages. A new stage will only be created when the previous stage ends. The existence, number, and settings of stages on a review instance are created based on the accessReviewStageSettings on the parent accessReviewScheduleDefinition.
     */
    private ?string $stages;

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

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
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

    public function getContactedReviewers(): array
    {
        return $this->contactedReviewers;
    }

    public function setContactedReviewers(array $contactedReviewers): self
    {
        $this->contactedReviewers = $contactedReviewers;
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

    public function getStages(): ?string
    {
        return $this->stages;
    }

    public function setStages(?string $stages): self
    {
        $this->stages = $stages;
        return $this;
    }

}
