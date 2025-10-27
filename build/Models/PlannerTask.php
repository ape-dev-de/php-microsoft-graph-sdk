<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTask
 */
class PlannerTask
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of checklist items with value set to false, representing incomplete items. */
    public ?float $activeChecklistItemCount = null;

    /** 
     * The categories to which the task has been applied. See applied Categories for possible values.
     * @var PlannerAppliedCategories|\stdClass|null
     */
    public PlannerAppliedCategories|\stdClass|null $appliedCategories = null;

    /** Hint used to order items of this type in a list view. The format is defined as outlined here. */
    public ?string $assigneePriority = null;

    /** 
     * The set of assignees the task is assigned to.
     * @var PlannerAssignments|\stdClass|null
     */
    public PlannerAssignments|\stdClass|null $assignments = null;

    /** Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It's 28 characters long and case-sensitive. Format validation is done on the service. */
    public ?string $bucketId = null;

    /** Number of checklist items that are present on the task. */
    public ?float $checklistItemCount = null;

    /** 
     * Identity of the user that completed the task.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $completedBy = null;

    /** Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $completedDateTime = null;

    /** Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group. */
    public ?string $conversationThreadId = null;

    /** 
     * Identity of the user that created the task.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $dueDateTime = null;

    /** Read-only. Value is true if the details object of the task has a nonempty description and false otherwise. */
    public ?bool $hasDescription = null;

    /** Hint used to order items of this type in a list view. The format is defined as outlined here. */
    public ?string $orderHint = null;

    /** Percentage of task completion. When set to 100, the task is considered completed. */
    public ?float $percentComplete = null;

    /** Plan ID to which the task belongs. */
    public ?string $planId = null;

    /** 
     * This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     * @var PlannerPreviewType|\stdClass|null
     */
    public PlannerPreviewType|\stdClass|null $previewType = null;

    /** Priority of the task. The valid range of values is between 0 and 10, with the increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as 'urgent', 2, 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'.  Additionally, Planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'. */
    public ?float $priority = null;

    /** Number of external references that exist on the task. */
    public ?float $referenceCount = null;

    /** Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $startDateTime = null;

    /** Title of the task. */
    public ?string $title = null;

    /** 
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @var PlannerAssignedToTaskBoardTaskFormat|\stdClass|null
     */
    public PlannerAssignedToTaskBoardTaskFormat|\stdClass|null $assignedToTaskBoardFormat = null;

    /** 
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @var PlannerBucketTaskBoardTaskFormat|\stdClass|null
     */
    public PlannerBucketTaskBoardTaskFormat|\stdClass|null $bucketTaskBoardFormat = null;

    /** 
     * Read-only. Nullable. More details about the task.
     * @var PlannerTaskDetails|\stdClass|null
     */
    public PlannerTaskDetails|\stdClass|null $details = null;

    /** 
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @var PlannerProgressTaskBoardTaskFormat|\stdClass|null
     */
    public PlannerProgressTaskBoardTaskFormat|\stdClass|null $progressTaskBoardFormat = null;


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
        if (isset($data['activeChecklistItemCount'])) {
            $this->activeChecklistItemCount = is_numeric($data['activeChecklistItemCount']) ? (float)$data['activeChecklistItemCount'] : $data['activeChecklistItemCount'];
        }
        if (isset($data['appliedCategories'])) {
            $this->appliedCategories = is_array($data['appliedCategories']) ? new PlannerAppliedCategories($data['appliedCategories']) : $data['appliedCategories'];
        }
        if (isset($data['assigneePriority'])) {
            $this->assigneePriority = $data['assigneePriority'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = is_array($data['assignments']) ? new PlannerAssignments($data['assignments']) : $data['assignments'];
        }
        if (isset($data['bucketId'])) {
            $this->bucketId = $data['bucketId'];
        }
        if (isset($data['checklistItemCount'])) {
            $this->checklistItemCount = is_numeric($data['checklistItemCount']) ? (float)$data['checklistItemCount'] : $data['checklistItemCount'];
        }
        if (isset($data['completedBy'])) {
            $this->completedBy = is_array($data['completedBy']) ? new IdentitySet($data['completedBy']) : $data['completedBy'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['conversationThreadId'])) {
            $this->conversationThreadId = $data['conversationThreadId'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['dueDateTime'])) {
            $this->dueDateTime = is_string($data['dueDateTime']) ? new \DateTimeImmutable($data['dueDateTime']) : $data['dueDateTime'];
        }
        if (isset($data['hasDescription'])) {
            $this->hasDescription = is_bool($data['hasDescription']) ? $data['hasDescription'] : (bool)$data['hasDescription'];
        }
        if (isset($data['orderHint'])) {
            $this->orderHint = $data['orderHint'];
        }
        if (isset($data['percentComplete'])) {
            $this->percentComplete = is_numeric($data['percentComplete']) ? (float)$data['percentComplete'] : $data['percentComplete'];
        }
        if (isset($data['planId'])) {
            $this->planId = $data['planId'];
        }
        if (isset($data['previewType'])) {
            $this->previewType = is_string($data['previewType']) ? PlannerPreviewType::tryFrom($data['previewType']) : $data['previewType'];
        }
        if (isset($data['priority'])) {
            $this->priority = is_numeric($data['priority']) ? (float)$data['priority'] : $data['priority'];
        }
        if (isset($data['referenceCount'])) {
            $this->referenceCount = is_numeric($data['referenceCount']) ? (float)$data['referenceCount'] : $data['referenceCount'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['assignedToTaskBoardFormat'])) {
            $this->assignedToTaskBoardFormat = is_array($data['assignedToTaskBoardFormat']) ? new PlannerAssignedToTaskBoardTaskFormat($data['assignedToTaskBoardFormat']) : $data['assignedToTaskBoardFormat'];
        }
        if (isset($data['bucketTaskBoardFormat'])) {
            $this->bucketTaskBoardFormat = is_array($data['bucketTaskBoardFormat']) ? new PlannerBucketTaskBoardTaskFormat($data['bucketTaskBoardFormat']) : $data['bucketTaskBoardFormat'];
        }
        if (isset($data['details'])) {
            $this->details = is_array($data['details']) ? new PlannerTaskDetails($data['details']) : $data['details'];
        }
        if (isset($data['progressTaskBoardFormat'])) {
            $this->progressTaskBoardFormat = is_array($data['progressTaskBoardFormat']) ? new PlannerProgressTaskBoardTaskFormat($data['progressTaskBoardFormat']) : $data['progressTaskBoardFormat'];
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
