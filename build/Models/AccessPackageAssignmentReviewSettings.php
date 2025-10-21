<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentReviewSettings
 */
class AccessPackageAssignmentReviewSettings
{
    public function __construct(
        /** The default decision to apply if the access is not reviewed. The possible values are: keepAccess, removeAccess, acceptAccessRecommendation, unknownFutureValue. */
        public ?string $expirationBehavior = null,
        /** This collection specifies the users who will be the fallback reviewers when the primary reviewers don't respond. */
        public array $fallbackReviewers = [],
        /** If true, access reviews are required for assignments through this policy. */
        public ?bool $isEnabled = null,
        /** Specifies whether to display recommendations to the reviewer. The default value is true. */
        public ?bool $isRecommendationEnabled = null,
        /** Specifies whether the reviewer must provide justification for the approval. The default value is true. */
        public ?bool $isReviewerJustificationRequired = null,
        /** Specifies whether the principals can review their own assignments. */
        public ?bool $isSelfReview = null,
        /** This collection specifies the users or group of users who will review the access package assignments. */
        public array $primaryReviewers = [],
        /** When the first review should start and how often it should recur. */
        public ?string $schedule = null
    ) {}
}
