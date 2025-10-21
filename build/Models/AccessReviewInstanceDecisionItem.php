<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItem
 */
class AccessReviewInstanceDecisionItem
{
    public function __construct(
        /** The identifier of the accessReviewInstance parent. Supports $select. Read-only. */
        public ?string $accessReviewId = null,
        /** The identifier of the user who applied the decision. Read-only. */
        public ?string $appliedBy = null,
        /** The timestamp when the approval decision was applied.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn''t applied the decision or it was automatically applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only. */
        public ?\DateTimeInterface $appliedDateTime = null,
        /** The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only. */
        public ?string $applyResult = null,
        /** Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only). */
        public ?string $decision = null,
        /** Justification left by the reviewer when they made the decision. */
        public ?string $justification = null,
        /** Every decision item in an access review represents a principal''s access to a resource. This property represents details of the principal. For example, if a decision item represents access of User ''Bob'' to Group ''Sales'' - The principal is ''Bob'' and the resource is ''Sales''. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only. */
        public ?string $principal = null,
        /** A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only. */
        public ?string $principalLink = null,
        /** A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. The value is Approve if the sign-in is fewer than 30 days after the start of review, Deny if the sign-in is greater than 30 days after, or NoInfoAvailable. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only. */
        public ?string $recommendation = null,
        /** Every decision item in an access review represents a principal''s access to a resource. This property represents details of the resource. For example, if a decision item represents access of User ''Bob'' to Group ''Sales'' - The principal is Bob and the resource is ''Sales''. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only. */
        public ?string $resource = null,
        /** A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only. */
        public ?string $resourceLink = null,
        /** The identifier of the reviewer.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Supports $select. Read-only. */
        public ?string $reviewedBy = null,
        /** The timestamp when the review decision occurred. Supports $select. Read-only. */
        public ?\DateTimeInterface $reviewedDateTime = null,
        /** @var string[] Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem. */
        public array $insights = []
    ) {}
}
