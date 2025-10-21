<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstanceDecisionItem resources
 *
 * Available select fields:
 * - accessReviewId
 * - appliedBy
 * - appliedDateTime
 * - applyResult
 * - decision
 * - justification
 * - principal
 * - principalLink
 * - recommendation
 * - resource
 * - resourceLink
 * - reviewedBy
 * - reviewedDateTime
 * - insights
 */
class AccessReviewInstanceDecisionItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewInstanceDecisionItem
     */
    public const FIELD_ACCESS_REVIEW_ID = 'accessReviewId';
    public const FIELD_APPLIED_BY = 'appliedBy';
    public const FIELD_APPLIED_DATE_TIME = 'appliedDateTime';
    public const FIELD_APPLY_RESULT = 'applyResult';
    public const FIELD_DECISION = 'decision';
    public const FIELD_JUSTIFICATION = 'justification';
    public const FIELD_PRINCIPAL = 'principal';
    public const FIELD_PRINCIPAL_LINK = 'principalLink';
    public const FIELD_RECOMMENDATION = 'recommendation';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_LINK = 'resourceLink';
    public const FIELD_REVIEWED_BY = 'reviewedBy';
    public const FIELD_REVIEWED_DATE_TIME = 'reviewedDateTime';
    public const FIELD_INSIGHTS = 'insights';

    /**
     * Select specific AccessReviewInstanceDecisionItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
