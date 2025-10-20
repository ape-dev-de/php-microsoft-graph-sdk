<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentReviewSettings resources
 *
 * Available select fields:
 * - expirationBehavior
 * - fallbackReviewers
 * - isEnabled
 * - isRecommendationEnabled
 * - isReviewerJustificationRequired
 * - isSelfReview
 * - primaryReviewers
 * - schedule
 */
class AccessPackageAssignmentReviewSettingsQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION_BEHAVIOR = 'expirationBehavior';
    public const FIELD_FALLBACK_REVIEWERS = 'fallbackReviewers';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_IS_RECOMMENDATION_ENABLED = 'isRecommendationEnabled';
    public const FIELD_IS_REVIEWER_JUSTIFICATION_REQUIRED = 'isReviewerJustificationRequired';
    public const FIELD_IS_SELF_REVIEW = 'isSelfReview';
    public const FIELD_PRIMARY_REVIEWERS = 'primaryReviewers';
    public const FIELD_SCHEDULE = 'schedule';

    /**
     * Select specific AccessPackageAssignmentReviewSettings properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentReviewSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
