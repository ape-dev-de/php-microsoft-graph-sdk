<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItem
 */
class AccessReviewInstanceDecisionItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the accessReviewInstance parent. Supports $select. Read-only. */
    public ?string $accessReviewId = null;

    /** 
     * The identifier of the user who applied the decision. Read-only.
     * @var UserIdentity|\stdClass|null
     */
    public UserIdentity|\stdClass|null $appliedBy = null;

    /** The timestamp when the approval decision was applied.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't applied the decision or it was automatically applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only. */
    public ?\DateTimeInterface $appliedDateTime = null;

    /** The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only. */
    public ?string $applyResult = null;

    /** Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only). */
    public ?string $decision = null;

    /** Justification left by the reviewer when they made the decision. */
    public ?string $justification = null;

    /** 
     * Every decision item in an access review represents a principal's access to a resource. This property represents details of the principal. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is 'Bob' and the resource is 'Sales'. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $principal = null;

    /** A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only. */
    public ?string $principalLink = null;

    /** A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. The value is Approve if the sign-in is fewer than 30 days after the start of review, Deny if the sign-in is greater than 30 days after, or NoInfoAvailable. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only. */
    public ?string $recommendation = null;

    /** 
     * Every decision item in an access review represents a principal's access to a resource. This property represents details of the resource. For example, if a decision item represents access of User 'Bob' to Group 'Sales' - The principal is Bob and the resource is 'Sales'. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     * @var AccessReviewInstanceDecisionItemResource|\stdClass|null
     */
    public AccessReviewInstanceDecisionItemResource|\stdClass|null $resource = null;

    /** A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only. */
    public ?string $resourceLink = null;

    /** 
     * The identifier of the reviewer.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Supports $select. Read-only.
     * @var UserIdentity|\stdClass|null
     */
    public UserIdentity|\stdClass|null $reviewedBy = null;

    /** The timestamp when the review decision occurred. Supports $select. Read-only. */
    public ?\DateTimeInterface $reviewedDateTime = null;

    /** 
     * Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     * @var GovernanceInsight[]
     */
    public array $insights = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['accessReviewId'])) {
            $this->accessReviewId = $data['accessReviewId'];
        }
        if (isset($data['appliedBy'])) {
            $this->appliedBy = is_array($data['appliedBy']) ? new UserIdentity($data['appliedBy']) : $data['appliedBy'];
        }
        if (isset($data['appliedDateTime'])) {
            $this->appliedDateTime = is_string($data['appliedDateTime']) ? new \DateTimeImmutable($data['appliedDateTime']) : $data['appliedDateTime'];
        }
        if (isset($data['applyResult'])) {
            $this->applyResult = $data['applyResult'];
        }
        if (isset($data['decision'])) {
            $this->decision = $data['decision'];
        }
        if (isset($data['justification'])) {
            $this->justification = $data['justification'];
        }
        if (isset($data['principal'])) {
            $this->principal = is_array($data['principal']) ? new Identity($data['principal']) : $data['principal'];
        }
        if (isset($data['principalLink'])) {
            $this->principalLink = $data['principalLink'];
        }
        if (isset($data['recommendation'])) {
            $this->recommendation = $data['recommendation'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new AccessReviewInstanceDecisionItemResource($data['resource']) : $data['resource'];
        }
        if (isset($data['resourceLink'])) {
            $this->resourceLink = $data['resourceLink'];
        }
        if (isset($data['reviewedBy'])) {
            $this->reviewedBy = is_array($data['reviewedBy']) ? new UserIdentity($data['reviewedBy']) : $data['reviewedBy'];
        }
        if (isset($data['reviewedDateTime'])) {
            $this->reviewedDateTime = is_string($data['reviewedDateTime']) ? new \DateTimeImmutable($data['reviewedDateTime']) : $data['reviewedDateTime'];
        }
        if (isset($data['insights'])) {
            $this->insights = $data['insights'];
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
