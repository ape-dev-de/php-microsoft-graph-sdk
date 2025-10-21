<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewStageSettings
 */
class AccessReviewStageSettings
{
    /**
     * Indicate which decisions will go to the next stage. Can be a subset of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     * @var string[]
     */
    private array $decisionsThatWillMoveToNextStage = [];

    /**
     * Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, don''t specify dependsOn. Required if stageId isn''t 1.
     * @var string[]
     */
    private array $dependsOn = [];

    /**
     * The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Can''t exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays can''t exceed 7.
     */
    private ?float $durationInDays;

    /**
     * If provided, the fallback reviewers are asked to complete a review if the primary reviewers don''t exist. For example, if managers are selected as reviewers and a principal under review doesn''t have a manager in Microsoft Entra ID, the fallback reviewers are asked to review that principal. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition object.
     */
    private array $fallbackReviewers = [];

    /**
     */
    private array $recommendationInsightSettings = [];

    /**
     * Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property overrides override the corresponding setting on the accessReviewScheduleDefinition object.
     */
    private ?bool $recommendationsEnabled;

    /**
     * Defines who the reviewers are. If none is specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition.
     */
    private array $reviewers = [];

    /**
     * Unique identifier of the accessReviewStageSettings object. The stageId is used by the dependsOn property to indicate the order of the stages. Required.
     */
    private ?string $stageId;


    /**
     * @return string[]
     */
    public function getDecisionsThatWillMoveToNextStage(): array
    {
        return $this->decisionsThatWillMoveToNextStage;
    }

    /**
     * @param string[] $decisionsThatWillMoveToNextStage
     */
    public function setDecisionsThatWillMoveToNextStage(array $decisionsThatWillMoveToNextStage): self
    {
        $this->decisionsThatWillMoveToNextStage = $decisionsThatWillMoveToNextStage;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDependsOn(): array
    {
        return $this->dependsOn;
    }

    /**
     * @param string[] $dependsOn
     */
    public function setDependsOn(array $dependsOn): self
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }

    public function getDurationInDays(): ?float
    {
        return $this->durationInDays;
    }

    public function setDurationInDays(?float $durationInDays): self
    {
        $this->durationInDays = $durationInDays;
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

    public function getRecommendationInsightSettings(): array
    {
        return $this->recommendationInsightSettings;
    }

    public function setRecommendationInsightSettings(array $recommendationInsightSettings): self
    {
        $this->recommendationInsightSettings = $recommendationInsightSettings;
        return $this;
    }

    public function getRecommendationsEnabled(): ?bool
    {
        return $this->recommendationsEnabled;
    }

    public function setRecommendationsEnabled(?bool $recommendationsEnabled): self
    {
        $this->recommendationsEnabled = $recommendationsEnabled;
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

    public function getStageId(): ?string
    {
        return $this->stageId;
    }

    public function setStageId(?string $stageId): self
    {
        $this->stageId = $stageId;
        return $this;
    }

}
