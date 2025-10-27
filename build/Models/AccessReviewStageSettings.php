<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewStageSettings
 */
class AccessReviewStageSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Indicate which decisions will go to the next stage. Can be a subset of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
     * @var string[]
     */
    public array $decisionsThatWillMoveToNextStage = [];

    /** 
     * Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, don't specify dependsOn. Required if stageId isn't 1.
     * @var string[]
     */
    public array $dependsOn = [];

    /** The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Can't exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays can't exceed 7. */
    public ?float $durationInDays = null;

    /** 
     * If provided, the fallback reviewers are asked to complete a review if the primary reviewers don't exist. For example, if managers are selected as reviewers and a principal under review doesn't have a manager in Microsoft Entra ID, the fallback reviewers are asked to review that principal. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition object.
     * @var AccessReviewReviewerScope[]
     */
    public array $fallbackReviewers = [];

    /** 
     * 
     * @var AccessReviewRecommendationInsightSetting[]
     */
    public array $recommendationInsightSettings = [];

    /** Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property overrides override the corresponding setting on the accessReviewScheduleDefinition object. */
    public ?bool $recommendationsEnabled = null;

    /** 
     * Defines who the reviewers are. If none is specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition.
     * @var AccessReviewReviewerScope[]
     */
    public array $reviewers = [];

    /** Unique identifier of the accessReviewStageSettings object. The stageId is used by the dependsOn property to indicate the order of the stages. Required. */
    public ?string $stageId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['decisionsThatWillMoveToNextStage'])) {
            $this->decisionsThatWillMoveToNextStage = $data['decisionsThatWillMoveToNextStage'];
        }
        if (isset($data['dependsOn'])) {
            $this->dependsOn = $data['dependsOn'];
        }
        if (isset($data['durationInDays'])) {
            $this->durationInDays = $data['durationInDays'];
        }
        if (isset($data['fallbackReviewers'])) {
            $this->fallbackReviewers = $data['fallbackReviewers'];
        }
        if (isset($data['recommendationInsightSettings'])) {
            $this->recommendationInsightSettings = $data['recommendationInsightSettings'];
        }
        if (isset($data['recommendationsEnabled'])) {
            $this->recommendationsEnabled = $data['recommendationsEnabled'];
        }
        if (isset($data['reviewers'])) {
            $this->reviewers = $data['reviewers'];
        }
        if (isset($data['stageId'])) {
            $this->stageId = $data['stageId'];
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
