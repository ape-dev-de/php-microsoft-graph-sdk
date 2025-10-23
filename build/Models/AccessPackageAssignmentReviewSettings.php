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
     * @var AccessReviewExpirationBehavior|\stdClass|null
     */
    public mixed $expirationBehavior = null;

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
    public mixed $schedule = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['expirationBehavior'])) {
            $this->expirationBehavior = $data['expirationBehavior'];
        }
        if (isset($data['fallbackReviewers'])) {
            $this->fallbackReviewers = $data['fallbackReviewers'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['isRecommendationEnabled'])) {
            $this->isRecommendationEnabled = $data['isRecommendationEnabled'];
        }
        if (isset($data['isReviewerJustificationRequired'])) {
            $this->isReviewerJustificationRequired = $data['isReviewerJustificationRequired'];
        }
        if (isset($data['isSelfReview'])) {
            $this->isSelfReview = $data['isSelfReview'];
        }
        if (isset($data['primaryReviewers'])) {
            $this->primaryReviewers = $data['primaryReviewers'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = $data['schedule'];
        }
    }
}
