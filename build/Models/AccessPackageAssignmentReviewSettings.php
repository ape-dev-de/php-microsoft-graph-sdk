<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentReviewSettings
 */
class AccessPackageAssignmentReviewSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue.
     * @var AccessReviewExpirationBehavior|\stdClass|null
     */
    public AccessReviewExpirationBehavior|\stdClass|null $expirationBehavior = null;

    /** 
     * This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond.
     * @var SubjectSet[]
     */
    public array $fallbackReviewers = [];

    /** If true, access reviews are required for assignments through this policy. */
    public ?bool $isEnabled = null;

    /** Specifies whether to display recommendations to the reviewer. The default value is true. */
    public ?bool $isRecommendationEnabled = null;

    /** Specifies whether the reviewer must provide justification for the approval. The default value is true. */
    public ?bool $isReviewerJustificationRequired = null;

    /** Specifies whether the principals can review their own assignments. */
    public ?bool $isSelfReview = null;

    /** 
     * This collection specifies the users or group of users who will review the access package assignments.
     * @var SubjectSet[]
     */
    public array $primaryReviewers = [];

    /** 
     * When the first review should start and how often it should recur.
     * @var EntitlementManagementSchedule|\stdClass|null
     */
    public EntitlementManagementSchedule|\stdClass|null $schedule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['expirationBehavior'])) {
            $this->expirationBehavior = is_array($data['expirationBehavior']) ? new AccessReviewExpirationBehavior($data['expirationBehavior']) : $data['expirationBehavior'];
        }
        if (isset($data['fallbackReviewers'])) {
            $this->fallbackReviewers = $data['fallbackReviewers'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['isRecommendationEnabled'])) {
            $this->isRecommendationEnabled = is_bool($data['isRecommendationEnabled']) ? $data['isRecommendationEnabled'] : (bool)$data['isRecommendationEnabled'];
        }
        if (isset($data['isReviewerJustificationRequired'])) {
            $this->isReviewerJustificationRequired = is_bool($data['isReviewerJustificationRequired']) ? $data['isReviewerJustificationRequired'] : (bool)$data['isReviewerJustificationRequired'];
        }
        if (isset($data['isSelfReview'])) {
            $this->isSelfReview = is_bool($data['isSelfReview']) ? $data['isSelfReview'] : (bool)$data['isSelfReview'];
        }
        if (isset($data['primaryReviewers'])) {
            $this->primaryReviewers = $data['primaryReviewers'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = is_array($data['schedule']) ? new EntitlementManagementSchedule($data['schedule']) : $data['schedule'];
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
