<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerTask resources
 *
 * Available select fields:
 * - activeChecklistItemCount
 * - appliedCategories
 * - assigneePriority
 * - assignments
 * - bucketId
 * - checklistItemCount
 * - completedBy
 * - completedDateTime
 * - conversationThreadId
 * - createdBy
 * - createdDateTime
 * - dueDateTime
 * - hasDescription
 * - orderHint
 * - percentComplete
 * - planId
 * - previewType
 * - priority
 * - referenceCount
 * - startDateTime
 * - title
 * - assignedToTaskBoardFormat
 * - bucketTaskBoardFormat
 * - details
 * - progressTaskBoardFormat
 */
class PlannerTaskQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerTask
     */
    public const FIELD_ACTIVE_CHECKLIST_ITEM_COUNT = 'activeChecklistItemCount';
    public const FIELD_APPLIED_CATEGORIES = 'appliedCategories';
    public const FIELD_ASSIGNEE_PRIORITY = 'assigneePriority';
    public const FIELD_ASSIGNMENTS = 'assignments';
    public const FIELD_BUCKET_ID = 'bucketId';
    public const FIELD_CHECKLIST_ITEM_COUNT = 'checklistItemCount';
    public const FIELD_COMPLETED_BY = 'completedBy';
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CONVERSATION_THREAD_ID = 'conversationThreadId';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DUE_DATE_TIME = 'dueDateTime';
    public const FIELD_HAS_DESCRIPTION = 'hasDescription';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_PERCENT_COMPLETE = 'percentComplete';
    public const FIELD_PLAN_ID = 'planId';
    public const FIELD_PREVIEW_TYPE = 'previewType';
    public const FIELD_PRIORITY = 'priority';
    public const FIELD_REFERENCE_COUNT = 'referenceCount';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TITLE = 'title';
    public const FIELD_ASSIGNED_TO_TASK_BOARD_FORMAT = 'assignedToTaskBoardFormat';
    public const FIELD_BUCKET_TASK_BOARD_FORMAT = 'bucketTaskBoardFormat';
    public const FIELD_DETAILS = 'details';
    public const FIELD_PROGRESS_TASK_BOARD_FORMAT = 'progressTaskBoardFormat';

    /**
     * Select specific PlannerTask properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
