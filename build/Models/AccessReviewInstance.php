<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstance
 */
class AccessReviewInstance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only. */
    public ?\DateTimeInterface $endDateTime = null;

    /** 
     * This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select.
     * @var AccessReviewReviewerScope[]
     */
    public array $fallbackReviewers = [];

    /** 
     * This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @var AccessReviewReviewerScope[]
     */
    public array $reviewers = [];

    /** 
     * Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
     * @var AccessReviewScope|\stdClass|null
     */
    public mixed $scope = null;

    /** DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only. */
    public ?\DateTimeInterface $startDateTime = null;

    /** Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only. */
    public ?string $status = null;

    /** 
     * Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
     * @var AccessReviewReviewer[]
     */
    public array $contactedReviewers = [];

    /** 
     * Each user reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
     * @var AccessReviewInstanceDecisionItem[]
     */
    public array $decisions = [];

    /** 
     * If the instance has multiple stages, this returns the collection of stages. A new stage will only be created when the previous stage ends. The existence, number, and settings of stages on a review instance are created based on the accessReviewStageSettings on the parent accessReviewScheduleDefinition.
     * @var AccessReviewStage[]
     */
    public array $stages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['fallbackReviewers'])) {
            $this->fallbackReviewers = $data['fallbackReviewers'];
        }
        if (isset($data['reviewers'])) {
            $this->reviewers = $data['reviewers'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new AccessReviewScope($data['scope']) : $data['scope'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['contactedReviewers'])) {
            $this->contactedReviewers = $data['contactedReviewers'];
        }
        if (isset($data['decisions'])) {
            $this->decisions = $data['decisions'];
        }
        if (isset($data['stages'])) {
            $this->stages = $data['stages'];
        }
    }
}
