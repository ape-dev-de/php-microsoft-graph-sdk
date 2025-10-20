<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentReviewSettings
 */
class AccessPackageAssignmentReviewSettings
{
    /**
     * The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     */
    private ?string $expirationBehavior;

    /**
     * This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     */
    private array $fallbackReviewers = [];

    /**
     * If true, access reviews are required for assignments through this policy.
     */
    private ?bool $isEnabled;

    /**
     * Specifies whether to display recommendations to the reviewer. The default value is true.
     */
    private ?bool $isRecommendationEnabled;

    /**
     * Specifies whether the reviewer must provide justification for the approval. The default value is true.
     */
    private ?bool $isReviewerJustificationRequired;

    /**
     * Specifies whether the principals can review their own assignments.
     */
    private ?bool $isSelfReview;

    /**
     * This collection specifies the users or group of users who will review the access package assignments.
     */
    private array $primaryReviewers = [];

    /**
     * When the first review should start and how often it should recur.
     */
    private ?string $schedule;

    public function getExpirationBehavior(): ?string
    {
        return $this->expirationBehavior;
    }

    public function setExpirationBehavior(?string $expirationBehavior): self
    {
        $this->expirationBehavior = $expirationBehavior;
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

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getIsRecommendationEnabled(): ?bool
    {
        return $this->isRecommendationEnabled;
    }

    public function setIsRecommendationEnabled(?bool $isRecommendationEnabled): self
    {
        $this->isRecommendationEnabled = $isRecommendationEnabled;
        return $this;
    }

    public function getIsReviewerJustificationRequired(): ?bool
    {
        return $this->isReviewerJustificationRequired;
    }

    public function setIsReviewerJustificationRequired(?bool $isReviewerJustificationRequired): self
    {
        $this->isReviewerJustificationRequired = $isReviewerJustificationRequired;
        return $this;
    }

    public function getIsSelfReview(): ?bool
    {
        return $this->isSelfReview;
    }

    public function setIsSelfReview(?bool $isSelfReview): self
    {
        $this->isSelfReview = $isSelfReview;
        return $this;
    }

    public function getPrimaryReviewers(): array
    {
        return $this->primaryReviewers;
    }

    public function setPrimaryReviewers(array $primaryReviewers): self
    {
        $this->primaryReviewers = $primaryReviewers;
        return $this;
    }

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(?string $schedule): self
    {
        $this->schedule = $schedule;
        return $this;
    }

}
