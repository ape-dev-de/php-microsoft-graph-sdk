<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewStage
 */
class AccessReviewStage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time in ISO 8601 format and UTC time when the review stage is scheduled to end. This property is the cumulative total of the durationInDays for all stages. Read-only. */
        public ?\DateTimeInterface $endDateTime = null,
        /** This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers are notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner doesn't exist, or manager is specified as reviewer but a user's manager doesn't exist. */
        public array $fallbackReviewers = [],
        /** This collection of access review scopes is used to define who the reviewers are. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. */
        public array $reviewers = [],
        /** The date and time in ISO 8601 format and UTC time when the review stage is scheduled to start. Read-only. */
        public ?\DateTimeInterface $startDateTime = null,
        /** Specifies the status of an accessReviewStage. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $orderby, and $filter (eq only). Read-only. */
        public ?string $status = null,
        /** Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed. */
        public array $decisions = []
    ) {}
}
