<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItem
 */
class AccessReviewInstanceDecisionItem
{
    /**
     * The identifier of the accessReviewInstance parent. Supports $select. Read-only.
     */
    private ?string $accessReviewId;

    /**
     * The identifier of the user who applied the decision. Read-only.
     */
    private ?string $appliedBy;

    /**
     * The timestamp when the approval decision was applied.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn''t applied the decision or it was automatically applied. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $select. Read-only.
     */
    private ?\DateTimeInterface $appliedDateTime;

    /**
     * The result of applying the decision. Possible values: New, AppliedSuccessfully, AppliedWithUnknownFailure, AppliedSuccessfullyButObjectNotFound and ApplyNotSupported. Supports $select, $orderby, and $filter (eq only). Read-only.
     */
    private ?string $applyResult;

    /**
     * Result of the review. Possible values: Approve, Deny, NotReviewed, or DontKnow. Supports $select, $orderby, and $filter (eq only).
     */
    private ?string $decision;

    /**
     * Justification left by the reviewer when they made the decision.
     */
    private ?string $justification;

    /**
     * Every decision item in an access review represents a principal''s access to a resource. This property represents details of the principal. For example, if a decision item represents access of User ''Bob'' to Group ''Sales'' - The principal is ''Bob'' and the resource is ''Sales''. Principals can be of two types - userIdentity and servicePrincipalIdentity. Supports $select. Read-only.
     */
    private ?string $principal;

    /**
     * A link to the principal object. For example, https://graph.microsoft.com/v1.0/users/a6c7aecb-cbfd-4763-87ef-e91b4bd509d9. Read-only.
     */
    private ?string $principalLink;

    /**
     * A system-generated recommendation for the approval decision based off last interactive sign-in to tenant. The value is Approve if the sign-in is fewer than 30 days after the start of review, Deny if the sign-in is greater than 30 days after, or NoInfoAvailable. Possible values: Approve, Deny, or NoInfoAvailable. Supports $select, $orderby, and $filter (eq only). Read-only.
     */
    private ?string $recommendation;

    /**
     * Every decision item in an access review represents a principal''s access to a resource. This property represents details of the resource. For example, if a decision item represents access of User ''Bob'' to Group ''Sales'' - The principal is Bob and the resource is ''Sales''. Resources can be of multiple types. See accessReviewInstanceDecisionItemResource. Read-only.
     */
    private ?string $resource;

    /**
     * A link to the resource. For example, https://graph.microsoft.com/v1.0/servicePrincipals/c86300f3-8695-4320-9f6e-32a2555f5ff8. Supports $select. Read-only.
     */
    private ?string $resourceLink;

    /**
     * The identifier of the reviewer.00000000-0000-0000-0000-000000000000 if the assigned reviewer hasn't reviewed. Supports $select. Read-only.
     */
    private ?string $reviewedBy;

    /**
     * The timestamp when the review decision occurred. Supports $select. Read-only.
     */
    private ?\DateTimeInterface $reviewedDateTime;

    /**
     * Insights are recommendations to reviewers on whether to approve or deny a decision. There can be multiple insights associated with an accessReviewInstanceDecisionItem.
     * @var string[]
     */
    private array $insights = [];


    public function getAccessReviewId(): ?string
    {
        return $this->accessReviewId;
    }

    public function setAccessReviewId(?string $accessReviewId): self
    {
        $this->accessReviewId = $accessReviewId;
        return $this;
    }

    public function getAppliedBy(): ?string
    {
        return $this->appliedBy;
    }

    public function setAppliedBy(?string $appliedBy): self
    {
        $this->appliedBy = $appliedBy;
        return $this;
    }

    public function getAppliedDateTime(): ?\DateTimeInterface
    {
        return $this->appliedDateTime;
    }

    public function setAppliedDateTime(?\DateTimeInterface $appliedDateTime): self
    {
        $this->appliedDateTime = $appliedDateTime;
        return $this;
    }

    public function getApplyResult(): ?string
    {
        return $this->applyResult;
    }

    public function setApplyResult(?string $applyResult): self
    {
        $this->applyResult = $applyResult;
        return $this;
    }

    public function getDecision(): ?string
    {
        return $this->decision;
    }

    public function setDecision(?string $decision): self
    {
        $this->decision = $decision;
        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): self
    {
        $this->justification = $justification;
        return $this;
    }

    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;
        return $this;
    }

    public function getPrincipalLink(): ?string
    {
        return $this->principalLink;
    }

    public function setPrincipalLink(?string $principalLink): self
    {
        $this->principalLink = $principalLink;
        return $this;
    }

    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    public function setRecommendation(?string $recommendation): self
    {
        $this->recommendation = $recommendation;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

    public function getResourceLink(): ?string
    {
        return $this->resourceLink;
    }

    public function setResourceLink(?string $resourceLink): self
    {
        $this->resourceLink = $resourceLink;
        return $this;
    }

    public function getReviewedBy(): ?string
    {
        return $this->reviewedBy;
    }

    public function setReviewedBy(?string $reviewedBy): self
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    public function getReviewedDateTime(): ?\DateTimeInterface
    {
        return $this->reviewedDateTime;
    }

    public function setReviewedDateTime(?\DateTimeInterface $reviewedDateTime): self
    {
        $this->reviewedDateTime = $reviewedDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInsights(): array
    {
        return $this->insights;
    }

    /**
     * @param string[] $insights
     */
    public function setInsights(array $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

}
