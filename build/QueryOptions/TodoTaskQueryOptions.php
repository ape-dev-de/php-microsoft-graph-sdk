<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TodoTask resources
 *
 * Available select fields:
 * - body
 * - bodyLastModifiedDateTime
 * - categories
 * - completedDateTime
 * - createdDateTime
 * - dueDateTime
 * - hasAttachments
 * - importance
 * - isReminderOn
 * - lastModifiedDateTime
 * - recurrence
 * - reminderDateTime
 * - startDateTime
 * - status
 * - title
 * - attachments
 * - attachmentSessions
 * - checklistItems
 * - extensions
 * - linkedResources
 */
class TodoTaskQueryOptions extends QueryOptions
{
    public const FIELD_BODY = 'body';
    public const FIELD_BODY_LAST_MODIFIED_DATE_TIME = 'bodyLastModifiedDateTime';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DUE_DATE_TIME = 'dueDateTime';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_IS_REMINDER_ON = 'isReminderOn';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_REMINDER_DATE_TIME = 'reminderDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_TITLE = 'title';
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_ATTACHMENT_SESSIONS = 'attachmentSessions';
    public const FIELD_CHECKLIST_ITEMS = 'checklistItems';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_LINKED_RESOURCES = 'linkedResources';

    /**
     * Select specific TodoTask properties
     * 
     * @param array<string> $select Use TodoTaskQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
