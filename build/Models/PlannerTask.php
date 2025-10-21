<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PlannerTask
 */
class PlannerTask
{
    /**
     * Number of checklist items with value set to false, representing incomplete items.
     */
    private ?float $activeChecklistItemCount;

    /**
     * The categories to which the task has been applied. See applied Categories for possible values.
     */
    private ?string $appliedCategories;

    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined here.
     */
    private ?string $assigneePriority;

    /**
     * The set of assignees the task is assigned to.
     */
    private ?string $assignments;

    /**
     * Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It's 28 characters long and case-sensitive. Format validation is done on the service.
     */
    private ?string $bucketId;

    /**
     * Number of checklist items that are present on the task.
     */
    private ?float $checklistItemCount;

    /**
     * Identity of the user that completed the task.
     */
    private ?string $completedBy;

    /**
     * Read-only. Date and time at which the ''percentComplete'' of the task is set to ''100''. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     */
    private ?string $conversationThreadId;

    /**
     * Identity of the user that created the task.
     */
    private ?string $createdBy;

    /**
     * Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $dueDateTime;

    /**
     * Read-only. Value is true if the details object of the task has a nonempty description and false otherwise.
     */
    private ?bool $hasDescription;

    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined here.
     */
    private ?string $orderHint;

    /**
     * Percentage of task completion. When set to 100, the task is considered completed.
     */
    private ?float $percentComplete;

    /**
     * Plan ID to which the task belongs.
     */
    private ?string $planId;

    /**
     * This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     */
    private ?string $previewType;

    /**
     * Priority of the task. The valid range of values is between 0 and 10, with the increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as ''urgent'', 2, 3 and 4 as ''important'', 5, 6, and 7 as ''medium'', and 8, 9, and 10 as ''low''.  Additionally, Planner sets the value 1 for ''urgent'', 3 for ''important'', 5 for ''medium'', and 9 for ''low''.
     */
    private ?float $priority;

    /**
     * Number of external references that exist on the task.
     */
    private ?float $referenceCount;

    /**
     * Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * Title of the task.
     */
    private ?string $title;

    /**
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     */
    private ?string $assignedToTaskBoardFormat;

    /**
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     */
    private ?string $bucketTaskBoardFormat;

    /**
     * Read-only. Nullable. More details about the task.
     */
    private ?string $details;

    /**
     * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     */
    private ?string $progressTaskBoardFormat;


    public function getActiveChecklistItemCount(): ?float
    {
        return $this->activeChecklistItemCount;
    }

    public function setActiveChecklistItemCount(?float $activeChecklistItemCount): self
    {
        $this->activeChecklistItemCount = $activeChecklistItemCount;
        return $this;
    }

    public function getAppliedCategories(): ?string
    {
        return $this->appliedCategories;
    }

    public function setAppliedCategories(?string $appliedCategories): self
    {
        $this->appliedCategories = $appliedCategories;
        return $this;
    }

    public function getAssigneePriority(): ?string
    {
        return $this->assigneePriority;
    }

    public function setAssigneePriority(?string $assigneePriority): self
    {
        $this->assigneePriority = $assigneePriority;
        return $this;
    }

    public function getAssignments(): ?string
    {
        return $this->assignments;
    }

    public function setAssignments(?string $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getBucketId(): ?string
    {
        return $this->bucketId;
    }

    public function setBucketId(?string $bucketId): self
    {
        $this->bucketId = $bucketId;
        return $this;
    }

    public function getChecklistItemCount(): ?float
    {
        return $this->checklistItemCount;
    }

    public function setChecklistItemCount(?float $checklistItemCount): self
    {
        $this->checklistItemCount = $checklistItemCount;
        return $this;
    }

    public function getCompletedBy(): ?string
    {
        return $this->completedBy;
    }

    public function setCompletedBy(?string $completedBy): self
    {
        $this->completedBy = $completedBy;
        return $this;
    }

    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getConversationThreadId(): ?string
    {
        return $this->conversationThreadId;
    }

    public function setConversationThreadId(?string $conversationThreadId): self
    {
        $this->conversationThreadId = $conversationThreadId;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDueDateTime(): ?\DateTimeInterface
    {
        return $this->dueDateTime;
    }

    public function setDueDateTime(?\DateTimeInterface $dueDateTime): self
    {
        $this->dueDateTime = $dueDateTime;
        return $this;
    }

    public function getHasDescription(): ?bool
    {
        return $this->hasDescription;
    }

    public function setHasDescription(?bool $hasDescription): self
    {
        $this->hasDescription = $hasDescription;
        return $this;
    }

    public function getOrderHint(): ?string
    {
        return $this->orderHint;
    }

    public function setOrderHint(?string $orderHint): self
    {
        $this->orderHint = $orderHint;
        return $this;
    }

    public function getPercentComplete(): ?float
    {
        return $this->percentComplete;
    }

    public function setPercentComplete(?float $percentComplete): self
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    public function setPlanId(?string $planId): self
    {
        $this->planId = $planId;
        return $this;
    }

    public function getPreviewType(): ?string
    {
        return $this->previewType;
    }

    public function setPreviewType(?string $previewType): self
    {
        $this->previewType = $previewType;
        return $this;
    }

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
        return $this;
    }

    public function getReferenceCount(): ?float
    {
        return $this->referenceCount;
    }

    public function setReferenceCount(?float $referenceCount): self
    {
        $this->referenceCount = $referenceCount;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getAssignedToTaskBoardFormat(): ?string
    {
        return $this->assignedToTaskBoardFormat;
    }

    public function setAssignedToTaskBoardFormat(?string $assignedToTaskBoardFormat): self
    {
        $this->assignedToTaskBoardFormat = $assignedToTaskBoardFormat;
        return $this;
    }

    public function getBucketTaskBoardFormat(): ?string
    {
        return $this->bucketTaskBoardFormat;
    }

    public function setBucketTaskBoardFormat(?string $bucketTaskBoardFormat): self
    {
        $this->bucketTaskBoardFormat = $bucketTaskBoardFormat;
        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getProgressTaskBoardFormat(): ?string
    {
        return $this->progressTaskBoardFormat;
    }

    public function setProgressTaskBoardFormat(?string $progressTaskBoardFormat): self
    {
        $this->progressTaskBoardFormat = $progressTaskBoardFormat;
        return $this;
    }

}
